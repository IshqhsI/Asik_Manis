<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    //
     public function index()
    {
        $id = 1;
        $profil = db::table('sertifikasis')->where('id', $id)->first();
        return view('dashboard.admin.detail', [
            'title' => 'Profil',
            'one' => $profil
        ]);
    }
}