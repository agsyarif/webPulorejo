<?php

namespace App\Http\Livewire;

use App\Models\agama;
use App\Models\District;
use App\Models\pekerjaan;
use App\Models\penduduk;
use App\Models\pendidikan;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PendudukLivewire extends Component
{
    public $user_name;

    public $nik;
    public $no_kk;
    public $nama;
    public $jenis_kelamin;
    public $tempat_lahir;
    public $tgl_lahir;
    public $provinsi_id;
    public $kota_id;
    public $kecamatan_id;
    public $kelurahan_id;
    public $pendidikan_id;
    public $pekerjaan_id;
    public $agama_id;

    public $segment;
    public $search;

    protected $rules = [
        'nik' => 'required | numeric',
        'no_kk' => 'required|numeric',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'tempat_lahir' => 'required',
        'tgl_lahir' => 'required',
        'provinsi_id' => 'required',
        'kota_id' => 'required',
        'kecamatan_id' => 'required',
        'kelurahan_id' => 'required',
        'pendidikan_id' => 'required|numeric',
        'pekerjaan_id' => 'required|numeric',
        'agama_id' => 'required|numeric'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($segment)
    {
        $this->segment = $segment;
    }

    public function selectProvinsi($provinsi_id)
    {
        $this->provinsi_id = $provinsi_id;
    }

    public function selectKota($kota_id)
    {
        $this->kota_id = $kota_id;
    }

    public function selectKecamatan($kecamatan_id)
    {
        $this->kecamatan_id = $kecamatan_id;
    }

    public function selectKelurahan($kelurahan_id)
    {
        $this->kelurahan_id = $kelurahan_id;
    }

    public function submit()
    {
        $validatedData = $this->validate();

        $penduduk = new penduduk;
        $penduduk->nik = $this->nik;
        $penduduk->kk = $this->no_kk;
        $penduduk->nama = $this->nama;
        $penduduk->tempat_lahir = $this->tempat_lahir;
        $penduduk->tgl_lahir = $this->tgl_lahir;
        $penduduk->kelamin = $this->jenis_kelamin;
        $penduduk->id_kelurahan = $this->kelurahan_id;
        $penduduk->id_kecamatan = $this->kecamatan_id;
        $penduduk->id_kota = $this->kota_id;
        $penduduk->id_provinsi = $this->provinsi_id;
        $penduduk->id_agama = $this->agama_id;
        $penduduk->id_pekerjaan = $this->pekerjaan_id;
        $penduduk->id_pendidikan = $this->pendidikan_id;
        $penduduk->save();

        return redirect()->route('penduduk.index');
    }

    public function render()
    {
        if ($this->segment == 'create') {

            $pendidikan = pendidikan::all();
            $agama = agama::all();
            $pekerjaan = pekerjaan::all();
            $provinsi = Province::all();
            return view(
                'livewire.penduduk-livewire',
                [
                    'pendidikan' => $pendidikan,
                    'agama' => $agama,
                    'pekerjaan' => $pekerjaan,
                    'provinsi' => $provinsi,
                    'kota' => Regency::where('province_id', $this->provinsi_id)->get(),
                    'kecamatan' => District::where('regency_id', $this->kota_id)->get(),
                    'kelurahan' => Village::where('district_id', $this->kecamatan_id)->get()

                ]
            );
        } else if ($this->segment == 'index') {

            if ($this->search !== null) {
                $data = penduduk::where('nama', 'like', '%' . $this->search . '%')->orWhere('nik', 'like', '%' . $this->search . '%')->orWhere('kk', 'like', '%' . $this->search . '%')->orWhere('tempat_lahir', 'like', '%' . $this->search . '%')->orderBy('updated_at', 'desc')->get();
            } else {
                $data = penduduk::all();
            }

            return view('livewire.index_penduduk', compact('data'));
        } else if ($this->segment == 'edit') {

            $pendidikan = pendidikan::all();
            $agama = agama::all();
            $pekerjaan = pekerjaan::all();
            $provinsi = Province::all();
            return view(
                'livewire.edit_penduduk',
                [
                    'pendidikan' => $pendidikan,
                    'agama' => $agama,
                    'pekerjaan' => $pekerjaan,
                    'provinsi' => $provinsi,
                    'kota' => Regency::where('province_id', $this->provinsi_id)->get(),
                    'kecamatan' => District::where('regency_id', $this->kota_id)->get(),
                    'kelurahan' => Village::where('district_id', $this->kecamatan_id)->get()

                ]
            );
        }
    }
}
