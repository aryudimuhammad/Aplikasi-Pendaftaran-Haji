<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use DB;
use Carbon\Carbon;
use App\Models\Pendaftaran;
use App\Models\Pembayaran;
use App\Models\Proseskeberangkatan;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->now = Carbon::now()->translatedFormat('d F Y');

    }

    public function pendaftarYearFilter()
    {
        return view('admin.filter.pendaftar');

    }
    public function pendaftarhajiYearFilter()
    {
        return view('admin.filter.pendaftarhaji');

    }
    public function berangkathajiYearFilter()
    {
        return view('admin.filter.berangkat');

    }
    public function pembatalanhajiYearFilter()
    {
        return view('admin.filter.batal');

    }

    public function pembayaranbankFilter()
    {
        return view('admin.filter.bank');

    }

    public function pendaftarYear(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $data = User::whereBetween('created_at', [$start, $end])->get();
        $total = $data->count();
        $now = $this->now;
        return view('admin.report.yearpendaftar', compact('data', 'now', 'start', 'end', 'total'));

    }

    public function pendaftarhajiYear(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $data = Pendaftaran::whereBetween('created_at', [$start, $end])->get();
        $total = $data->count();
        $now = $this->now;
        return view('admin.report.yearpendaftarhaji', compact('data', 'now', 'start', 'end', 'total'));

    }

    public function berangkathajiYear(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $data = Pendaftaran::whereBetween('created_at', [$start, $end])->whereNotNull('tahun')->get();
        $total = $data->count();
        $now = $this->now;
        return view('admin.report.yearberangkat', compact('data', 'now', 'start', 'end', 'total'));

    }

    public function pembatalanhajiYear(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $data = Pendaftaran::whereBetween('created_at', [$start, $end])->whereStatus('3')->get();
        $total = $data->count();
        $now = $this->now;
        return view('admin.report.yearbatal', compact('data', 'now', 'start', 'end', 'total'));

    }

    public function pembayaranbank(Request $request)
    {
        $bank = $request->bank;
        $start = $request->start;
        $end = $request->end;
        $data = Pembayaran::whereBetween('created_at', [$start, $end])->whereBank($bank)->get();
        $total = $data->count();
        $now = $this->now;
        return view('admin.report.yearbank', compact('data', 'now', 'start', 'end', 'total'));

    }

    public function pembayaranuser($id)
    {
        $find = Pendaftaran::find($id);
        $name = $find->user->name;
        $total = $find->total_pembayaran;
        $data = Pembayaran::where('pendaftaran_id', $find->id)->get();
        $now = $this->now;
        return view('admin.report.pembayaranuser', compact('data', 'now','name','total'));

    }

    public function grafik()
    {
        $Jan = Pendaftaran::whereMonth('created_at','01')->get()->count();
        $Feb = Pendaftaran::whereMonth('created_at','02')->get()->count();
        $Mar = Pendaftaran::whereMonth('created_at','03')->get()->count();
        $Apr = Pendaftaran::whereMonth('created_at','04')->get()->count();
        $Mei = Pendaftaran::whereMonth('created_at','05')->get()->count();
        $Jun = Pendaftaran::whereMonth('created_at','06')->get()->count();
        $Jul = Pendaftaran::whereMonth('created_at','07')->get()->count();
        $Agu = Pendaftaran::whereMonth('created_at','08')->get()->count();
        $Sep = Pendaftaran::whereMonth('created_at','09')->get()->count();
        $Okt = Pendaftaran::whereMonth('created_at','10')->get()->count();
        $Nov = Pendaftaran::whereMonth('created_at','11')->get()->count();
        $Des = Pendaftaran::whereMonth('created_at','12')->get()->count();

        $now = $this->now;
        return view('admin.report.grafik', compact('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'));

    }

    public function grafikuser()
    {
        $Jan = User::whereMonth('created_at','01')->get()->count();
        $Feb = User::whereMonth('created_at','02')->get()->count();
        $Mar = User::whereMonth('created_at','03')->get()->count();
        $Apr = User::whereMonth('created_at','04')->get()->count();
        $Mei = User::whereMonth('created_at','05')->get()->count();
        $Jun = User::whereMonth('created_at','06')->get()->count();
        $Jul = User::whereMonth('created_at','07')->get()->count();
        $Agu = User::whereMonth('created_at','08')->get()->count();
        $Sep = User::whereMonth('created_at','09')->get()->count();
        $Okt = User::whereMonth('created_at','10')->get()->count();
        $Nov = User::whereMonth('created_at','11')->get()->count();
        $Des = User::whereMonth('created_at','12')->get()->count();

        $now = $this->now;
        return view('admin.report.grafikuser', compact('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'));

    }

    public function grafikbanding()
    {
        $Jan = User::whereMonth('created_at','01')->get()->count();
        $Feb = User::whereMonth('created_at','02')->get()->count();
        $Mar = User::whereMonth('created_at','03')->get()->count();
        $Apr = User::whereMonth('created_at','04')->get()->count();
        $Mei = User::whereMonth('created_at','05')->get()->count();
        $Jun = User::whereMonth('created_at','06')->get()->count();
        $Jul = User::whereMonth('created_at','07')->get()->count();
        $Agu = User::whereMonth('created_at','08')->get()->count();
        $Sep = User::whereMonth('created_at','09')->get()->count();
        $Okt = User::whereMonth('created_at','10')->get()->count();
        $Nov = User::whereMonth('created_at','11')->get()->count();
        $Des = User::whereMonth('created_at','12')->get()->count();

        $countJan = Pendaftaran::whereMonth('created_at','01')->get()->count();
        $countFeb = Pendaftaran::whereMonth('created_at','02')->get()->count();
        $countMar = Pendaftaran::whereMonth('created_at','03')->get()->count();
        $countApr = Pendaftaran::whereMonth('created_at','04')->get()->count();
        $countMei = Pendaftaran::whereMonth('created_at','05')->get()->count();
        $countJun = Pendaftaran::whereMonth('created_at','06')->get()->count();
        $countJul = Pendaftaran::whereMonth('created_at','07')->get()->count();
        $countAgu = Pendaftaran::whereMonth('created_at','08')->get()->count();
        $countSep = Pendaftaran::whereMonth('created_at','09')->get()->count();
        $countOkt = Pendaftaran::whereMonth('created_at','10')->get()->count();
        $countNov = Pendaftaran::whereMonth('created_at','11')->get()->count();
        $countDes = Pendaftaran::whereMonth('created_at','12')->get()->count();

        $now = $this->now;
        return view('admin.report.grafikbanding', compact('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'
        ,'countJan','countFeb','countMar','countApr','countMei','countJun','countJul','countAgu','countSep','countOkt','countNov','countDes'));

    }



    public function prosessemua()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatansemua', compact('data'));
    }

    public function proses1()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan1', compact('data'));
    }

    public function proses2()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan2', compact('data'));
    }

    public function proses3()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan3', compact('data'));
    }

    public function proses4()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan4', compact('data'));
    }

    public function proses5()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan5', compact('data'));
    }

    public function proses6()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan6', compact('data'));
    }

    public function proses7()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan7', compact('data'));
    }

    public function proses8()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan8', compact('data'));
    }

    public function proses9()
    {
        $data = Proseskeberangkatan::where('id',1)->first();
        return view('admin.report.proseskeberangkatan9', compact('data'));
    }

    public function kuisioner()
    {
        $data = Kuisioner::orderby('id','desc')->get();
        return view('admin.report.kuisioner', compact('data'));
    }
}
