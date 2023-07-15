<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function pendaftaran()
    {
        $data = Pendaftaran::where('user_id', Auth::user()->id)->first();

        return view('welcomeuser', compact('data'));
    }

    public function index()
    {
        $data = Pendaftaran::orderBy('id', 'desc')->get();

        return view('admin.index', compact('data'));
    }

    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 2;
        $user->save();

        $data =  new Pendaftaran;
        $data->user_id = $user->id;
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
