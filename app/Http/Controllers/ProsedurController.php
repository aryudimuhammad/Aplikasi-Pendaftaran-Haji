<?php

namespace App\Http\Controllers;

use App\Models\Prosedur;
use Illuminate\Http\Request;

class ProsedurController extends Controller
{
    public function index()
    {
        $data = Prosedur::orderBy('no', 'desc')->get();

        return view('admin.prosedur.index', compact('data'));
    }

    public function create(Request $request)
    {
        $data = new Prosedur();
        $data->no = $request->no;
        $data->isi = $request->isi;
        $data->save();

        return back()->withSuccess('Data Berhasil Ditambahkan.');
    }
    public function edit(Request $request)
    {
        $data = Prosedur::where('id', $request->id)->first();
        $data->no = $request->no;
        $data->isi = $request->isi;
        $data->update();

        return back()->withSuccess('Data Berhasil Diubah.');
    }
    public function delete($id)
    {
        $data = Prosedur::where('id', $id)->first();
        $data->delete();

        return back()->withSuccess('Data Berhasil Dihapus.');
    }
}
