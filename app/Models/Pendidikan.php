<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    public function Jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }

    public function Pengalaman()
    {
        return $this->hasOne(Pengalaman::class);
    }

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}