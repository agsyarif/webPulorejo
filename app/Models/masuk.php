<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class masuk extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'no_surat',
        'nik',
        'alasan_masuk',
        'alamat_tujuan',
        'jenis_masuk'
    ];
}
