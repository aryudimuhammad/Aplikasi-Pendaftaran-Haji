<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function pendaftaran()
    {

        return view('welcomeuser');
    }

    public function index()
    {
        $data = Pendaftaran::orderBy('id', 'desc')->get();

        return view('admin.index', compact('data'));
    }

    public function create(Request $request)
    {
        $data =  new Pendaftaran;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->telepon = $request->telepon;
        $data->jk = $request->jk;
        $data->noporsi = $request->noporsi;
        $data->status = $request->status;
        $data->jadwal_berangkat = $request->jadwal_berangkat;
        $data->pembayaran = $request->file('pembayaran')->store('post-pembayaran');
        $data->bukti = $request->file('bukti')->store('post-bukti');
        $data->ktp = $request->file('ktp')->store('post-ktp');
        $data->kk = $request->file('kk')->store('post-kk');
        $data->akte = $request->file('akte')->store('post-akte');
        $data->foto = $request->file('foto')->store('post-foto');
        $data->save();

        return back()->with('success', 'Data Berhasil Ditambahkan.');
    }

    public function edit(Request $request)
    {
        $data = Pendaftaran::find($request->id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->telepon = $request->telepon;
        $data->jk = $request->jk;
        $data->noporsi = $request->noporsi;
        $data->status = $request->status;
        $data->jadwal_berangkat = $request->jadwal_berangkat;
        $data->pembayaran = $request->file('pembayaran')->store('post-pembayaran');
        $data->bukti = $request->file('bukti')->store('post-bukti');
        $data->ktp = $request->file('ktp')->store('post-ktp');
        $data->kk = $request->file('kk')->store('post-kk');
        $data->akte = $request->file('akte')->store('post-akte');
        $data->foto = $request->file('foto')->store('post-foto');
        $data->update();

        return back()->with('success', 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Pendaftaran::find($id);
        $data->delete();

        return back()->with('success', 'Data Berhasil Dihapus.');
    }
}
