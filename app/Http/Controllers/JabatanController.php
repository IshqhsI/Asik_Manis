<?php

namespace App\Http\Controllers;

use App\Models\JabatanAll;
use App\Models\Jenjang;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Jabatans;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        for ($i = 1; $i <= 6; $i++) {
            $penJenjang[$i] = Pendidikan::Where('id_jenjang', $i)->get();
        }

        for ($i = 1; $i <= 6; $i++) {
            $pengJenjang[$i] = Pengalaman::Where('id_jenjang', $i)->get();
        }


        return view('daftar.jabatan.index', [
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
        // for ($i = 1; $i <= 6; $i++) {
        //     $penJenjang[$i] = Pendidikan::Where('id_jenjang', $i)->get();
        // }

        // for ($i = 1; $i <= 6; $i++) {
        //     $pengJenjang[$i] = Pengalaman::Where('id_jenjang', $i)->get();
        // }


        // return view('daftar.jabatan.create', [
        //     'title' => 'Daftar',
        //     'jenjang' => Jenjang::all(),
        //     'pendidikan1' => $penJenjang[1],
        //     'pendidikan2' => $penJenjang[2],
        //     'pendidikan3' => $penJenjang[3],
        //     'pendidikan4' => $penJenjang[4],
        //     'pendidikan5' => $penJenjang[5],
        //     'pendidikan6' => $penJenjang[6],
        //     'pengalaman1' => $pengJenjang[1],
        //     'pengalaman2' => $pengJenjang[2],
        //     'pengalaman3' => $pengJenjang[3],
        //     'pengalaman4' => $pengJenjang[4],
        //     'pengalaman5' => $pengJenjang[5],
        //     'pengalaman6' => $pengJenjang[6],
        //     'pendidikan' => Pendidikan::all()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jabatan_kerja' => 'required',
            'jenjang' => 'required',
            'pendidikan' => 'required',
            'pengalaman' => 'required'
        ]);

        $pengalaman = $request->file('pengalaman');
        $pengalaman->storeAs('public/assets/pengalaman', $pengalaman->hashName());

        JabatanAll::create([
            'id_user' => Auth::user()->id,
            'nama_jabatan' => $request->jabatan_kerja,
            'id_jenjang' => $request->jenjang,
            'id_pendidikan' => $request->pendidikan,
            'pengalaman' => $pengalaman->hashName()
        ]);

        return redirect('/daftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JabatanAll  $jabatanall
     * @return \Illuminate\Http\Response
     */
    public function show(JabatanAll $jabatanall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatans  $jabatans
     * @return \Illuminate\Http\Response
     */
    public function edit(JabatanAll $jabatanall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatans  $jabatans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JabatanAll $jabatanall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatans  $jabatans
     * @return \Illuminate\Http\Response
     */
    public function destroy(JabatanAll $jabatanall)
    {
        //
    }
}