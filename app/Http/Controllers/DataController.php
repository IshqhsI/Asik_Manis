<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JabatanAll;
use App\Models\Sertifikasi;
use App\Models\Jenjang;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function __construct()
    {
        $this->jenjang = new Jenjang();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        for ($i = 1; $i <= 6; $i++) {
            $penJenjang[$i] = Pendidikan::Where('id_jenjang', $i)->get();
        }

        for ($i = 1; $i <= 6; $i++) {
            $pengJenjang[$i] = Pengalaman::Where('id_jenjang', $i)->get();
        }

        $all = DB::select("SELECT `jabatan_alls`.`nama_jabatan`, `jenjangs`.`nama_jenjang`, `pendidikans`.`nama_pendidikan` FROM `jabatan_alls` 
        INNER JOIN `jenjangs` ON `jenjangs`.`id` = `jabatan_alls`.`id_jenjang`
        INNER JOIN `pendidikans` ON `pendidikans`.`id` = `jabatan_alls`.`id_pendidikan` WHERE `jabatan_alls`.`id_user` = :id_user", ['id_user' => Auth::user()->id]);

        return view('daftar.index', [
            'title' => 'Daftar',
            'jenjang' => Jenjang::all(),
            'jenjangAll' => $all,
            'pendidikan' => Pendidikan::all()
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
        $all = DB::select("SELECT `jabatan_alls`.`nama_jabatan`, `jenjangs`.`nama_jenjang`, `pendidikans`.`nama_pendidikan`, `jabatan_alls`.`pengalaman` FROM `jabatan_alls` 
        INNER JOIN `jenjangs` ON `jenjangs`.`id` = `jabatan_alls`.`id_jenjang`
        INNER JOIN `pendidikans` ON `pendidikans`.`id` = `jabatan_alls`.`id_pendidikan` WHERE `jabatan_alls`.`id_user` = :id_user", ['id_user' => Auth::user()->id]);



        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'nohp' => 'required',
            'referensi_kerja' => 'required|image',
            'ktp' => 'required|image',
            'npwp' => 'required|image',
            'pasphoto' => 'required|image',
        ]);

        $ref = $request->file('referensi_kerja')->store('referensiKerja');
        $ktp = $request->file('ktp')->store('ktp');
        $npwp = $request->file('npwp')->store('npwp');
        $pasf = $request->file('pasphoto')->store('pasphoto');

        foreach ($all as $key) {
            Sertifikasi::Create([
                'id_user' => Auth::user()->id,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'password' => $request->password,
                'nohp' => $request->nohp,
                'referensi_kerja' => $ref,
                'ktp' => $ktp,
                'npwp' => $npwp,
                'pasphoto' => $pasf,
                'nama_jabatan' => $key->nama_jabatan,
                'nama_jenjang' => $key->nama_jenjang,
                'nama_pendidikan' => $key->nama_pendidikan,
                'pengalaman' => $key->pengalaman
            ]);
        }



        // $this->validate($request, [
        //     ''
        // ]);


        return redirect('/');
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
    public function destroy(Sertifikasi $sertifikasi)
    {
        Sertifikasi::destroy($sertifikasi->id);
        return redirect('/dashboard');
    }
}