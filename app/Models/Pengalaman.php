<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;

    public function Jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }

    public function Pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}