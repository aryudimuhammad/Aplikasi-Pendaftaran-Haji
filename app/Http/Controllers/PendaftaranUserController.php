<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
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
    public function kuisioner(Request $request)
    {
        if($data = Kuisioner::where('user_id', $request->user_id)->first())
        {
            $data = Kuisioner::where('user_id',$request->user_id)->first();
            $data->user_id = $request->user_id;
            $data->pertanyaan1 = $request->pertanyaan1;
            $data->pertanyaan2 = $request->pertanyaan2;
            $data->pertanyaan3 = $request->pertanyaan3;
            $data->pertanyaan4 = $request->pertanyaan4;
            $data->pertanyaan5 = $request->pertanyaan5;
            $data->status = 3;
            $data->update();
            return redirect()->route('pendaftaran')->withSuccess('Data Berhasil Diubah');
        }else{
            $data =  new Kuisioner();
            $data->user_id = $request->user_id;
            $data->pertanyaan1 = $request->pertanyaan1;
            $data->pertanyaan2 = $request->pertanyaan2;
            $data->pertanyaan3 = $request->pertanyaan3;
            $data->pertanyaan4 = $request->pertanyaan4;
            $data->pertanyaan5 = $request->pertanyaan5;
            $data->status = 2;
            $data->save();
            return redirect()->route('pendaftaran')->withSuccess('Data Berhasil Terkirim');
        }

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
        $data->status = 1;
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
