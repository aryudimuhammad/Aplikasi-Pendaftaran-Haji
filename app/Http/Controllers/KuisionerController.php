<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    public function index()
    {
        $data = Kuisioner::orderBy('id', 'desc')->get();

        return view('admin.kuisioner.index',compact('data'));
    }

    public function delete($id)
    {
        $data = Kuisioner::where('id', $id)->first();
        $data->delete();

        return back()->withSuccess('Data Berhasil Dihapus.');
    }
}
