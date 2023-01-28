<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JabatanAll;
use App\Models\JabatanUser;
use App\Models\Sertifikasi;
use App\Models\Jenjang;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
// use App\Http\Controllers\Session;

class DataController extends Controller
{
    public function __construct()
    {
        // $this->jenjang = new Jenjang();
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

        $all = DB::select("SELECT `jabatan_alls`.`id`, `jabatan_alls`.`nama_jabatan`, `jenjangs`.`nama_jenjang`, `pendidikans`.`nama_pendidikan` FROM `jabatan_alls` 
        INNER JOIN `jenjangs` ON `jenjangs`.`id` = `jabatan_alls`.`id_jenjang`
        INNER JOIN `pendidikans` ON `pendidikans`.`id` = `jabatan_alls`.`id_pendidikan` WHERE `jabatan_alls`.`id_user` = :id_user", ['id_user' => Auth::user()->id]);

        return view('daftar.index', [
            'title' => 'Daftar',
            'jenjang' => Jenjang::all(),
            'jenjangAll' => $all,
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
            'referensi_kerja' => 'required',
            'ijazah' => 'required',
            'ktp' => 'required',
            'npwp' => 'required',
            'pasphoto' => 'required|image',
        ]);


        $ref = $request->file('referensi_kerja')->store('referensiKerja');
        $ijazah = $request->file('ijazah')->store('ijazah');
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
                'ijazah' => $ijazah,
                'ktp' => $ktp,
                'npwp' => $npwp,
                'pasphoto' => $pasf,
                'nama_jabatan' => $key->nama_jabatan,
                'nama_jenjang' => $key->nama_jenjang,
                'nama_pendidikan' => $key->nama_pendidikan,
                'pengalaman' => $key->pengalaman
            ]);
        }

        DB::delete('delete from jabatan_alls where id_user = ?', [Auth::user()->id]);


        // $this->validate($request, [
        //     ''
        // ]);

        session()->flash('daftar', 'Successfully done the operation.');
        return redirect('/dashboard/profil');
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

    public function profilInput(Request $request){

        
         $this->validate($request, [
            'jabatan_kerja' => 'required',
            'jenjang' => 'required',
            'pendidikan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'nohp' => 'required',
            'referensi_kerja' => 'required',
            'ijazah' => 'required',
            'ktp' => 'required',
            'npwp' => 'required',
            'pasphoto' => 'required',
        ]);


        // Tambah Jabatan
        $pengalaman = $request->file('pengalaman');
        $pendidikan = $request->pendidikan;
        
        $i = True;

        if ($pendidikan != 23 && $pengalaman == NULL) {
            return back()->with('pengalamanError', 'daftar Jabatan failed!');
        } else if ($pendidikan != 23 && $pengalaman != NULL) {
            $pengalaman = $request->file('pengalaman');
            $pengalaman->storeAs('public/assets/pengalaman', $pengalaman->hashName());
        } else if ($pendidikan == 23 && $pengalaman != NULL) {
            $pengalaman = $request->file('pengalaman');
            $pengalaman->storeAs('public/assets/pengalaman', $pengalaman->hashName());
        } else {
            $i = False;
            $pengalaman = 'TidakadaFile';
        }

        if ($i == false) {
            JabatanAll::create([
                'id_user' => Auth::user()->id,
                'nama_jabatan' => $request->jabatan_kerja,
                'id_jenjang' => $request->jenjang,
                'id_pendidikan' => $request->pendidikan,
                'pengalaman' => $pengalaman
            ]);
            JabatanUser::create([
                'id_user' => Auth::user()->id,
                'nama_jabatan' => $request->jabatan_kerja,
                'id_jenjang' => $request->jenjang,
                'id_pendidikan' => $request->pendidikan,
                'pengalaman' => $pengalaman
            ]);
        } else {
            JabatanAll::create([
                'id_user' => Auth::user()->id,
                'nama_jabatan' => $request->jabatan_kerja,
                'id_jenjang' => $request->jenjang,
                'id_pendidikan' => $request->pendidikan,
                'pengalaman' => $pengalaman->hashName()
            ]);
            JabatanUser::create([
                'id_user' => Auth::user()->id,
                'nama_jabatan' => $request->jabatan_kerja,
                'id_jenjang' => $request->jenjang,
                'id_pendidikan' => $request->pendidikan,
                'pengalaman' => $pengalaman->hashName()
            ]);
        }

        // Daftar
        $all = DB::select("SELECT `jabatan_alls`.`nama_jabatan`, `jenjangs`.`nama_jenjang`, `pendidikans`.`nama_pendidikan`, `jabatan_alls`.`pengalaman` FROM `jabatan_alls` 
        INNER JOIN `jenjangs` ON `jenjangs`.`id` = `jabatan_alls`.`id_jenjang`
        INNER JOIN `pendidikans` ON `pendidikans`.`id` = `jabatan_alls`.`id_pendidikan` WHERE `jabatan_alls`.`id_user` = :id_user", ['id_user' => Auth::user()->id]);

        foreach ($all as $key) {
            Sertifikasi::Create([
                'id_user' => Auth::user()->id,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'password' => $request->password,
                'nohp' => $request->nohp,
                'referensi_kerja' => $request->referensi_kerja,
                'ijazah' => $request->ijazah,
                'ktp' => $request->ktp,
                'npwp' => $request->npwp,
                'pasphoto' => $request->pasphoto,
                'nama_jabatan' => $key->nama_jabatan,
                'nama_jenjang' => $key->nama_jenjang,
                'nama_pendidikan' => $key->nama_pendidikan,
                'pengalaman' => $key->pengalaman
            ]);
        }

        DB::delete('delete from jabatan_alls where id_user = ?', [Auth::user()->id]);

        Session::flash("addJabatan", "success");
        return redirect('/dashboard/profil');

    }
}