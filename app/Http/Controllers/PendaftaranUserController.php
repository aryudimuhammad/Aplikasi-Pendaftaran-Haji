<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  new Pendaftaran;
        $data->user_id = $request->user_id;
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->jk = $request->jk;
        $data->noporsi = $request->noporsi;
        $data->status = $request->status;
        $data->jadwal_berangkat = $request->jadwal_berangkat;
        // $data->pembayaran = $request->file('pembayaran')->store('post-pembayaran');
        // $data->bukti = $request->file('bukti')->store('post-bukti');
        // $data->ktp = $request->file('ktp')->store('post-ktp');
        // $data->kk = $request->file('kk')->store('post-kk');
        // $data->akte = $request->file('akte')->store('post-akte');
        // $data->foto = $request->file('foto')->store('post-foto');
        // dd($data);
        $data->save();

        $pendaftaran_id = $data->id;
        $upload = pendaftaran::findOrFail($pendaftaran_id);

        if($request->foto != null)
        {
            $img = $request->file('foto');
            $FotoExt  = $img->getClientOriginalExtension();
            $FotoName = $pendaftaran_id;
            $foto   = $FotoName.'.'.$FotoExt;
            $img->move('public/foto', $foto);
            $upload->foto       = $foto;
        }
        if($request->pembayaran != null)
        {
            $img = $request->file('pembayaran');
            $FotoExt  = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto   = $FotoName.'.'.$FotoExt;
            $img->move('public/pembayaran', $foto);
            $upload->pembayaran       = $foto;
        }
        if($request->bukti != null)
        {
            $img = $request->file('bukti');
            $FotoExt  = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto   = $FotoName.'.'.$FotoExt;
            $img->move('public/bukti', $foto);
            $upload->bukti       = $foto;
        }
        if($request->ktp != null)
        {
            $img = $request->file('ktp');
            $FotoExt  = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto   = $FotoName.'.'.$FotoExt;
            $img->move('public/ktp', $foto);
            $upload->ktp       = $foto;
        }
        if($request->kk != null)
        {
            $img = $request->file('kk');
            $FotoExt  = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto   = $FotoName.'.'.$FotoExt;
            $img->move('public/kk', $foto);
            $upload->kk       = $foto;
        }
        if($request->akte != null)
        {
            $img = $request->file('akte');
            $FotoExt  = $img->getClientOriginalExtension();
            $FotoName = $data->id;
            $foto   = $FotoName.'.'.$FotoExt;
            $img->move('public/akte', $foto);
            $upload->akte       = $foto;
        }
        $upload->update();

        return redirect()->route('pendaftaran')->withSuccess('Data Berhasil Disimpan');
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
}
