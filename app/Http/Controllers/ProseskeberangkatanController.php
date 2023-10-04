<?php

namespace App\Http\Controllers;

use App\Models\Proseskeberangkatan;
use Illuminate\Http\Request;

class ProseskeberangkatanController extends Controller
{
    public function index()
    {
        $data = Proseskeberangkatan::orderBy('id', 'desc')->get();
        $data1 = Proseskeberangkatan::findorfail(1);

        return view('admin.proseskeberangkatan', compact('data','data1'));
    }

    public function edit(Request $request)
    {
        $data = Proseskeberangkatan::where('id', 1)->first();

        $data->olahraga = $request->olahraga;
        $data->olahragaisi = $request->olahragaisi;
        $data->vaksinasi = $request->vaksinasi;
        $data->vaksinasiisi = $request->vaksinasiisi;
        $data->kesehatan = $request->kesehatan;
        $data->kesehatanisi = $request->kesehatanisi;
        $data->istirahat = $request->istirahat;
        $data->istirahatisi = $request->istirahatisi;
        $data->obat = $request->obat;
        $data->obatisi = $request->obatisi;
        $data->perjalanan = $request->perjalanan;
        $data->perjalananisi = $request->perjalananisi;
        $data->perlengkapan = $request->perlengkapan;
        $data->perlengkapanisi = $request->perlengkapanisi;
        $data->keuangan = $request->keuangan;
        $data->keuanganisi = $request->keuanganisi;
        $data->imantaqwa = $request->imantaqwa;
        $data->imantaqwaisi = $request->imantaqwaisi;
        $data->update();

        return redirect()->back()->withSuccess( 'Data Berhasil Diubah.');
    }
}
