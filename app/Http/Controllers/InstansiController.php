<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;
use Session;
class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $instansi = Instansi::all();
        return view('instansi.index',compact('instansi'));
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
        $instansi = Instansi::findOrFail($id);
        return view('instansi.edit',compact('instansi'));
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
        $this->validate($request,[
            'nama' => 'required|',
            'alamat' => 'required|',
            'telepon' => 'required|',
            'kab_kota' => 'required|',
            'email' => 'required|',
            'ketua' => 'required|',
            
        ]);
        $instansi = Instansi::findOrFail($id);  
        $instansi->nama = $request->nama;
        $instansi->alamat = $request->alamat;
        $instansi->telepon = $request->telepon;
        $instansi->kab_kota = $request->kab_kota;
        $instansi->email = $request->email;
        $instansi->ketua = $request->ketua;
        $instansi->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$instansi->nama</b>"
        ]);
        return redirect()->route('instansi.index');
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
}
