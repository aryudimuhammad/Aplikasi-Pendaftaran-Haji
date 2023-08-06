<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PembayaranAdminController extends Controller
{
    public function index($id)
    {
        $id;
        $data = Pembayaran::where('pendaftaran_id', '=', $id)->get();

        return view('admin.pembayaran.index',compact('data', 'id'));
    }

    public function create($id)
    {
        $id;
        return view('admin.pembayaran.create',compact('id'));
    }

    public function store(Request $request)
    {
        $data =  new Pembayaran;
        $data->pendaftaran_id = $request->pendaftaran_id;
        $data->jumlah = $request->jumlah;
        $data->bank = $request->bank;
        $data->validasi = $request->validasi;
        $data->tanggal_bayar = $request->tanggal_bayar;

        $update = Pendaftaran::find($request->pendaftaran_id);
        $update->total_pembayaran = $update->total_pembayaran + $request->jumlah;
        $data->save();
        $update->update();

        $id = $update->id;
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

            return redirect()->route('pembayaran.index', $id)->withSuccess('Pembayaran Berhasil Disimpan');
    }

    public function destroy($id)
    {
        $data = Pembayaran::find($id);

        $update = Pendaftaran::findOrFail($data->pendaftaran_id);
        $update->total_pembayaran = $update->total_pembayaran - $data->jumlah;
        $update->update();
        $data->delete();

        return back()->withSuccess('Data Berhasil Dihapus.');
    }
}
