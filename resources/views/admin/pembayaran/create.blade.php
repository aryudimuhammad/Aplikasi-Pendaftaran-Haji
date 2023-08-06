@extends('layouts.app')
@section('title') Detail Pembayaran @endsection
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
        <h1 class="m-0">Detail Pembayaran</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Detail Pembayaran</a></li>
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
                            <form method="POST" action="{{route('pembayaran.store', $id)}}" enctype="multipart/form-data">
                                <div class="body">
                                    @csrf
                                    <input type="hidden" value="{{$id}}" name="pendaftaran_id" required readonly>
                                    <label>Jumlah</label>
                                    <div class="form-group">
                                        <input type="number" name="jumlah" id="jumlah" placeholder="Masukkan Jumlah Pembayaran"
                                            value="{{old('jumlah')}}"
                                            class="form-control  @error ('jumlah') is-invalid @enderror">
                                        @error('nama')<div class="invalid-feedback"> {{$message}} </div>@enderror
                                    </div>

                                    <label>Validasi</label>
                                    <div class="form-group">
                                        <input type="number" name="validasi" id="validasi" placeholder="Masukkan Validasi"
                                            value="{{old('validasi')}}"
                                            class="form-control  @error ('validasi') is-invalid @enderror">
                                        @error('validasi')<div class="invalid-feedback"> {{$message}} </div>@enderror
                                    </div>

                                    <label>Tanggal Pembayaran</label>
                                    <div class="form-group">
                                        <input type="date" name="tanggal_bayar" id="tanggal_bayar" placeholder="Masukkan Tanggal Pembayaran"
                                            value="{{old('tanggal_bayar')}}"
                                            class="form-control  @error ('tanggal_bayar') is-invalid @enderror">
                                        @error('tanggal_bayar')<div class="invalid-feedback"> {{$message}} </div>@enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="bank">Bank</label>
                                        <select name="bank" class="custom-select form-control-border" id="bank">
                                            <option value="BNI Syariah">BNI Syariah</option>
                                            <option value="BRI Syariah">BRI Syariah</option>
                                            <option value="Syariah Mandiri">Syariah Mandiri</option>
                                            <option value="Panin Dubai Syariah">Panin Dubai Syariah</option>
                                            <option value="BTN Syariah">BTN Syariah</option>
                                            <option value="Mega Syariah">Mega Syariah</option>
                                            <option value="Muamalat">Muamalat</option>
                                            <option value="CIMB- Niaga Syariah">CIMB- Niaga Syariah</option>
                                            <option value="Permata Syariah">Permata Syariah</option>
                                        </select>
                                        </div>

                                    <label for="bukti">Bukti Pembayaran</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="bukti" name="bukti" value="{{old('bukti')}}">
                                    </div>
                                    <br>
                                </div>
                                <div class="card-footer">
                                    <a type="button" href="{{route('pembayaran.index', $id)}}" class="btn btn-danger text-white" >Kembali</a>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
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
@include('admin.create')
@include('admin.edit')
@include('admin.delete')
@include('admin.cetaktglmasuk')
@include('admin.cetaktglkeluar')
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

