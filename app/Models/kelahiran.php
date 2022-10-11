<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kelahiran extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'no_surat',
        'nik',
        'tgl_lahir',
        'kelahiran_ke'
    ];
}
