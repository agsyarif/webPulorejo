<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tujuan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tujuan',
        'misi_id'
    ];

    public function misi()
    {
        return $this->belongsTo(misi::class);
    }

    public function sasaran()
    {
        return $this->hasMany(sasaran::class);
    }
}
