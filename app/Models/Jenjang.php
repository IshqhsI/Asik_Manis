<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Pendidikan()
    {
        return $this->hasMany(Pendidikan::class);
    }

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function Pengalaman()
    {
        return $this->hasMany(Pengalaman::class);
    }
}