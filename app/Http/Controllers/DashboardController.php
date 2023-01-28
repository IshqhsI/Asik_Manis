<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Jenjang;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.index', [
            "title" => "Dashboard",
            'sertifikasi' => Sertifikasi::all(),
            "linkgambarlogin" => "login.png",
            "linkgambarlogout" => "logout.png",
            "linkgambarreg" => "register.png",
            "linkgambaradmin" => "admin.png"

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin()
    {
        return view('Dashboard.admin.index', [
            "title" => "Dashboard",
            'sertifikasi' => Sertifikasi::all(),
            "linkgambarlogin" => "login.png",
            "linkgambarlogout" => "logout.png",
            "linkgambarreg" => "register.png",
            "linkgambaradmin" => "admin.png"

        ]);
    }

    public function profil()
    {
        $id = Auth::user()->id;
        // $one = DB::select('select * from sertifikasis where id_user = ? LIMIT 1', [$id]);
        $data = DB::table('sertifikasis')->where('id_user', $id)->first();

        if(empty($data)){
            return redirect('/daftar');
        }

        $all = DB::select("SELECT `jabatan_alls`.`nama_jabatan`, `jenjangs`.`nama_jenjang`, `pendidikans`.`nama_pendidikan`,  `jabatan_alls`.`pengalaman` FROM `jabatan_alls` 
        INNER JOIN `jenjangs` ON `jenjangs`.`id` = `jabatan_alls`.`id_jenjang`
        INNER JOIN `pendidikans` ON `pendidikans`.`id` = `jabatan_alls`.`id_pendidikan` WHERE `jabatan_alls`.`id_user` = :id_user", [$id]);
        $jabatan = DB::table('sertifikasis')->where('id_user', $id)->get();

        // Data Form Modal
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

        $referensi_kerja = explode('/', $data->referensi_kerja)[1];
        $ijazah = explode('/', $data->ijazah)[1];
        $npwp = explode('/', $data->npwp)[1];
        $ktp = explode('/', $data->ktp)[1];
        $pasphoto = explode('/', $data->pasphoto)[1];
        
        if($data === NULL){
            return redirect('/dashboard/admin');
        }

        return view('dashboard.profil.index', [
            'title' => 'Profil',
            'one' => $data,
            'referensi_kerja' => $referensi_kerja,
            'ijazah' => $ijazah,
            'npwp' => $npwp,
            'ktp' => $ktp,
            'pasphoto' => $pasphoto,
            'jabatan' => $jabatan,
            'pengalaman' => $all,
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

    
}