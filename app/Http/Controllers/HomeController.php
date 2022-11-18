<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'sertifikasi' => Sertifikasi::all(),
            "title" => "Home",
            "linkgambarlogin" => "login.png",
            "linkgambarlogout" => "logout.png",
            "linkgambarreg" => "register.png",
            "linkgambaradmin" => "admin.png"
        ]);
    }
}