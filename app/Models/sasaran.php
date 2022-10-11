<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sasaran extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sasaran',
        'sasaran_id'
    ];

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
