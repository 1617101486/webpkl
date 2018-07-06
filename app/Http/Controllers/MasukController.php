<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masuk;
use App\Disposisi;
use Session;

class MasukController extends Controller
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
        $data = Masuk::with('Disposisi')->get();
        return view('masuk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $disposisi = Disposisi::all();
        return view('masuk.create',compact('disposisi'));
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
        $this->validate($request,[
            'no_surat' => 'required|',
            'tgl_surat' => 'required|',
            'pengirim' => 'required',
            'perihal' => 'required',
            'file' => 'required',
            'id_disposisi' => 'required',
            'keterangan' => 'required'
        ]);
        $masuk = new Masuk;
        $masuk->no_surat = $request->no_surat;
        $masuk->tgl_surat = $request->tgl_surat;
        $masuk->pengirim = $request->pengirim;
        $masuk->perihal = $request->perihal;
        $masuk->file = $request->file;
        $masuk->id_disposisi = $request->id_disposisi;
        $masuk->keterangan = $request->keterangan;
        $masuk->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$masuk->tgl_surat</b>"
        ]);
        return redirect()->route('masuk.index');
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
        $masuk = Masuk::findOrFail($id);
        $disposisi = Disposisi::all();
        $selectedDisposisi = masuk::findOrFail($id)->id_disposisi;
        return view('masuk.show',compact('masuk','disposisi','selectedDisposisi'));
   
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
        $masuk = Masuk::findOrFail($id);
        $disposisi = Disposisi::all();
        $selectedDisposisi = masuk::findOrFail($id)->id_disposisi;
        return view('masuk.edit',compact('masuk','disposisi','selectedDisposisi'));
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
             'no_surat' => 'required|',
            'tgl_surat' => 'required|',
            'pengirim' => 'required',
            'perihal' => 'required',
            'file' => 'required',
            'id_disposisi' => 'required',
            'keterangan' => 'required'
        ]);
        $masuk = Masuk::findOrFail($id);
        $masuk->no_surat = $request->no_surat;
        $masuk->tgl_surat = $request->tgl_surat;
        $masuk->pengirim = $request->pengirim;
        $masuk->perihal = $request->perihal;
        $masuk->file = $request->file;
        $masuk->id_disposisi = $request->id_disposisi;
        $masuk->keterangan = $request->keterangan;
        $masuk->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menngedit <b>$masuk->nama</b>"
        ]);
        return redirect()->route('masuk.index');
    
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
        $data = Masuk::findOrFail($id);
        $data->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('masuk.index');
    }
}
