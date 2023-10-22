<?php

namespace App\Http\Controllers;

use App\Models\Cara;
use Illuminate\Http\Request;

class CaraController extends Controller
{
    public function index()
    {
        $data = Cara::orderBy('no', 'desc')->get();

        return view('admin.cara.index', compact('data'));
    }

    public function create(Request $request)
    {
        $data = new Cara();
        $data->no = $request->no;
        $data->isi = $request->isi;
        $data->save();

        return back()->withSuccess('Data Berhasil Ditambahkan.');
    }
    public function edit(Request $request)
    {
        $data = Cara::where('id', $request->id)->first();
        $data->no = $request->no;
        $data->isi = $request->isi;
        $data->update();

        return back()->withSuccess('Data Berhasil Diubah.');
    }
    public function delete($id)
    {
        $data = Cara::where('id', $id)->first();
        $data->delete();

        return back()->withSuccess('Data Berhasil Dihapus.');
    }
}
