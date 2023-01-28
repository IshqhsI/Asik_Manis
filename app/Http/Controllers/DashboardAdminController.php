<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use App\Models\User;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Jenjang;
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

        $user = User::where('is_Admin', 0)->get();
        $all = Count(Sertifikasi::all()->groupBy('id_user'));

        $users = count($user);
        return view('Dashboard.admin.index', [
            "title" => "Dashboard Admin",
            'sertifikasi' => Sertifikasi::get()->unique('id_user'),
            "linkgambarlogin" => "login.png",
            "linkgambarlogout" => "logout.png",
            "linkgambarreg" => "register.png",
            "linkgambaradmin" => "admin.png",
            'jumlahPendaftar' => $users,
            'jumlahFile' => $all
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

        if ($data === NULL) {
            return redirect('/dashboard/admin');
        }

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
        for ($i = 1; $i <= 6; $i++) {
            $penJenjang[$i] = Pendidikan::Where('id_jenjang', $i)->get();
        }

        for ($i = 1; $i <= 6; $i++) {
            $pengJenjang[$i] = Pengalaman::Where('id_jenjang', $i)->get();
        }
        $data = db::table('sertifikasis')->where('id', $id)->first();
        return view('dashboard.admin.edit', [
            'title' => 'Edit Data',
            'one' => $data,
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
        return redirect('/dashboard/admin')->with('edit', 'success');
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