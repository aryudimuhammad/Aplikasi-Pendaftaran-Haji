<?php

namespace App\Http\Controllers;

use App\Models\Cara;
use App\Models\Kuisioner;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pendaftaran;
use App\Models\Pembayaran;
use App\Models\Prosedur;
use App\Models\Proseskeberangkatan;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function pendaftaran()
    {
        $cara = Cara::orderby('no', 'asc')->get();

        $data = Pendaftaran::where('user_id', Auth::user()->id)->first();
        if($data == null)
        {
            $prosedur = Prosedur::orderby('no', 'asc')->get();
            $kuisioner = Kuisioner::where('user_id', Auth::user()->id)->first();
            $data1 = Proseskeberangkatan::where('id',1)->first();
            $data = Pendaftaran::where('user_id', Auth::user()->id)->first();
            return view('welcomeuser', compact('data','data1','kuisioner','cara','prosedur'));
        }
        else
        {
            $prosedur = Prosedur::orderby('no', 'asc')->get();
            $kuisioner = Kuisioner::where('user_id', Auth::user()->id)->first();
            $data = Pendaftaran::where('user_id', Auth::user()->id)->first();
            $pembayaran = Pembayaran::where('pendaftaran_id', '=', $data->id)->get();
            $data1 = Proseskeberangkatan::where('id',1)->first();
            return view('welcomeuser', compact('data', 'pembayaran','data1','kuisioner','cara','prosedur'));
        }

    }

    public function index()
    {
        $data = Pendaftaran::orderBy('id', 'desc')->get();

        return view('admin.index', compact('data'));
    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $data = Pembayaran::where('pendaftaran_id', $pendaftaran->id)->get();

        return view('admin.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Pendaftaran::findOrFail($id);

        return view('admin.edit', compact('data'));
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
        $data->save();

        $pendaftaran_id = $data->id;
        $upload = pendaftaran::findOrFail($pendaftaran_id);

        if($request->persyaratan != null)
        {
            $img = $request->file('persyaratan');
            $FotoExt  = $img->getClientOriginalExtension();
            $FotoName = $pendaftaran_id;
            $foto   = $FotoName.'.'.$FotoExt;
            $img->move('public/persyaratan', $foto);
            $upload->persyaratan       = $foto;
        }
        $upload->update();

        return back()->withSuccess('Data Berhasil Ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $data = Pendaftaran::find($id);
        $find = $data->user_id;
        $user = User::where('id', $find)->first();

        $user->name = $request->name;
        if($request->password)
        {
            $user->password = Hash::make($request->password);
        }
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->jk = $request->jk;
        $data->noporsi = $request->noporsi;
        $data->status = $request->status;
        $data->tahun = $request->tahun;
        $data->tahun = $request->tahun;
        $data->update();
        $user->update();

        return redirect()->route('adminpendaftaran')->withSuccess( 'Data Berhasil Diubah.');
    }

    public function delete($id)
    {
        $data = Pendaftaran::find($id);
        $data->delete();

        return back()->withSuccess( 'Data Berhasil Dihapus.');
    }
}
