<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarModel extends Model
{
    use HasFactory;

    public function Jabatan()
    {
        return $this->hasMany(Jabatan::class);
    }

    public function Jenjang()
    {
        return $this->hasMany(Jenjang::class);
    }

    public function Pendidikan()
    {
        return $this->hasMany(Pendidikan::class);
    }

    public function Pengalaman()
    {
        return $this->hasMany(Pengalaman::class);
    }
}