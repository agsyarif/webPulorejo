<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pindah extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'no_surat',
        'nik',
        'alasan_pindah',
        'alamat_tujuan',
        'jenis_pindahan'
    ];
}
