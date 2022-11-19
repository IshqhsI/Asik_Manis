<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('Dashboard.admin.index', [
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
        // $one = DB::select('select * from sertifikasis where id_user = ? LIMIT 1', [$id]);
        $data = DB::table('sertifikasis')->where('id_user', $id)->first();
        $all = DB::select("SELECT `jabatan_alls`.`nama_jabatan`, `jenjangs`.`nama_jenjang`, `pendidikans`.`nama_pendidikan`,  `jabatan_alls`.`pengalaman` FROM `jabatan_alls` 
        INNER JOIN `jenjangs` ON `jenjangs`.`id` = `jabatan_alls`.`id_jenjang`
        INNER JOIN `pendidikans` ON `pendidikans`.`id` = `jabatan_alls`.`id_pendidikan` WHERE `jabatan_alls`.`id_user` = :id_user", [$id]);
        $jabatan = DB::table('sertifikasis')->where('id_user', $id)->get();

        return view('dashboard.admin.detail', [
            'title' => 'Detail',
            'one' => $data,
            'jabatan' => $jabatan,
            'pengalaman' => $all
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = db::table('sertifikasis')->where('id', $id)->first();
        return view('dashboard.admin.edit', [
            'title' => 'Edit Data',
            'one' => $data
        ]);
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
        DB::table('sertifikasis')
            ->where('id', $id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'password' => $request->password,
                'nohp' => $request->nohp,
                'nama_jabatan' => $request->jabatan_kerja,
                'nama_jenjang' => $request->jenjang,
                'nama_pendidikan' => $request->pendidikan
            ]);
        return redirect('/dashboard/admin');
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

    public function hapus($id)
    {
        DB::delete('DELETE FROM `sertifikasis` WHERE `sertifikasis`.`id` = ?', [$id]);
        return redirect('/dashboard/admin');
    }
}