<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Jenjang()
    {
        return $this->hasOne(Jenjang::class);
    }

    public function Pendidikan()
    {
        return $this->hasOne(Pendidikan::class);
    }

    public function Pengalaman()
    {
        return $this->hasOne(Pengalaman::class);
    }
}