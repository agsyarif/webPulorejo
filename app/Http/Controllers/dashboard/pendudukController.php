<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\agama;
use App\Models\District;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\penduduk;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class pendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::where('name', 'JAWA BARAT')->first();
        $penduduk = penduduk::all();
        return view('pages.dashboard.penduduk.index', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendidikan = pendidikan::all();
        $pekerjaan = pekerjaan::all();
        $agama = agama::all();
        return view('pages.dashboard.penduduk.create', compact('pendidikan', 'pekerjaan', 'agama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduk = penduduk::findOrFail($id);
        $pendidikan = pendidikan::all();
        $pekerjaan = pekerjaan::all();
        $agama = agama::all();
        $provinsi = Province::all();
        $kota = Regency::all();
        $kecamatan = District::all();
        $kelurahan = Village::all();
        return view('pages.dashboard.penduduk.edit', compact('penduduk', 'pekerjaan', 'pendidikan', 'agama', 'provinsi', 'kota', 'kecamatan', 'kelurahan'));

        // return view('pages.dashboard.penduduk.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
