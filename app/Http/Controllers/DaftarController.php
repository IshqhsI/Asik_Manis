<?php

namespace App\Http\Controllers;

use App\Models\JabatanAll;
use App\Models\Jenjang;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DaftarController extends Controller
{
    public function __construct()
    {
        // $this->jenjang = new Jenjang();
    }
    public function index()
    {
        // $penJenjang1 = Pendidikan::where('id_jenjang', 1)->get();
        // $penJenjang2 = Pendidikan::where('id_jenjang', 2)->get();
        // $penJenjang3 = Pendidikan::where('id_jenjang', 3)->get();
        // $penJenjang4 = Pendidikan::where('id_jenjang', 4)->get();
        // $penJenjang5 = Pendidikan::where('id_jenjang', 5)->get();
        // $penJenjang6 = Pendidikan::where('id_jenjang', 6)->get();

        for ($i = 1; $i <= 6; $i++) {
            $penJenjang[$i] = Pendidikan::Where('id_jenjang', $i)->get();
        }

        for ($i = 1; $i <= 6; $i++) {
            $pengJenjang[$i] = Pengalaman::Where('id_jenjang', $i)->get();
        }

        // $all = JabatanAll::where('id_user', Auth::user()->id)->get();
        $all = DB::select("SELECT `jabatan_alls`.`nama_jabatan`, `jenjangs`.`nama_jenjang`, `pendidikans`.`nama_pendidikan` FROM `jabatan_alls` 
        INNER JOIN `jenjangs` ON `jenjangs`.`id` = `jabatan_alls`.`id_jenjang`
        INNER JOIN `pendidikans` ON `pendidikans`.`id` = `jabatan_alls`.`id_pendidikan` WHERE `jabatan_alls`.`id_user` = :id_user", ['id_user' => Auth::user()->id]);

        return view('daftar.index', [
            'title' => 'Daftar',
            'jenjang' => Jenjang::all(),
            'pendidikan1' => $penJenjang[1],
            'pendidikan2' => $penJenjang[2],
            'pendidikan3' => $penJenjang[3],
            'pendidikan4' => $penJenjang[4],
            'pendidikan5' => $penJenjang[5],
            'pendidikan6' => $penJenjang[6],
            'pengalaman1' => $pengJenjang[1],
            'pengalaman2' => $pengJenjang[2],
            'pengalaman3' => $pengJenjang[3],
            'pengalaman4' => $pengJenjang[4],
            'pengalaman5' => $pengJenjang[5],
            'pengalaman6' => $pengJenjang[6],
            'jenjangAll' => $all,
            'pendidikan' => Pendidikan::all()
        ]);
    }

    public function store(Request $request)
    {
        dd($request);
    }

    // public function jabatan()
    // {
    //     return view('daftar.jabatan.index', [
    //         'title' => 'Tambah Jabatan Kerja'
    //     ]);
    // }
    public function hapus($id)
    {
        $user = Auth::user()->id;
        DB::delete("DELETE FROM `jabatan_alls` WHERE `jabatan_alls`.`id` = $id AND `jabatan_alls`.`id_user` = ?", [$user]);
        // DB::delete('DELETE FROM `jabatan_users` WHERE `jabatan_users`.`id` = ?', [$id]);
        return redirect('/daftar');
    }
}