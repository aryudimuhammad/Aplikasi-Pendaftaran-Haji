<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pendaftaran $pendaftaran)
    {
        $data = Pembayaran::where('pendaftaran_id', '=', $pendaftaran->id)->get();

        return view('admin.pembayaran.index',compact('data'));
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
        $data =  new Pembayaran;
        $data->pendaftaran_id = $request->pendaftaran_id;
        $data->jumlah = $request->jumlah;
        $data->bank = $request->bank;
        $data->validasi = $request->validasi;
        $data->tanggal_bayar = $request->tanggal_bayar;

        $update = Pendaftaran::findOrFail($request->pendaftaran_id);
        $update->total_pembayaran = $update->total_pembayaran + $request->jumlah;
        $data->save();
        $update->update();

        $pembayaran_id = $data->id;
        $upload = Pembayaran::findOrFail($pembayaran_id);

        if($request->bukti != null)
        {
            $img = $request->file('bukti');
            $FotoExt  = $img->getClientOriginalExtension();
            $FotoName = $pembayaran_id;
            $foto   = $FotoName.'.'.$FotoExt;
            $img->move('public/bukti', $foto);
            $upload->bukti       = $foto;
        }
        $upload->update();

            return redirect()->route('pendaftaran')->withSuccess('Pembayran Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pembayaran::find($id);

        $update = Pendaftaran::findOrFail($data->pendaftaran_id);
        $update->total_pembayaran = $update->total_pembayaran - $data->jumlah;
        $update->update();
        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus.');
    }
}
