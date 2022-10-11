<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class penduduk extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'nik',
        'kk',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'kelamin',
        'id_kelurahan',
        'id_kecamatan',
        'id_kota',
        'id_provinsi',
        'id_agama',
        'id_pekerjaan',
        'id_pendidikan'
    ];

    public function agama()
    {
        return $this->belongsTo(agama::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(pekerjaan::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(pendidikan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Village::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(District::class);
    }

    public function kota()
    {
        return $this->belongsTo(Regency::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(Province::class);
    }
}
