@extends('layouts.app')
@section('title') Cetak Pendaftar Haji @endsection
@section('head')
<link rel="stylesheet" href="{{asset('back/plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Cetak Pendaftar Haji</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Cetak Pendaftar Haji</a></li>
        </ol>
        </div>
    </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="dropdown">
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="card-content">
                        <div class="card-body">
                            <form method="GET" action="{{route('report.pendaftarhajiYear')}}" target="_blank">
                                <div class="body">
                                    @csrf
                                    <div class="form-group">
                                        <label for="start">Masukan Tanggal Awal</label>
                                        <input type="date" class="form-control" id="start" name="start"
                                            placeholder="Masukan Tahun" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="end">Masukan Tanggal Akhir</label>
                                        <input type="date" class="form-control" id="end" name="end"
                                            placeholder="Masukan Tahun" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a type="button" href="{{route('adminpendaftaran')}}" class="btn btn-danger text-white" >Kembali</a>
                                    <button type="submit" class="btn btn-primary">Cetak</button>
                                </div>
                            </form>
                        </div>
                    </div>

              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('script')
<script src="{{asset('back/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('back/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('back/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('back/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('back/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('back/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('back/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('back/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('back/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('back/dist/js/adminlte.min.js')}}"></script>
@endsection

