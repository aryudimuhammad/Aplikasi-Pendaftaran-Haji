@extends('layouts.app')
@section('title') Proses Keberangkatan @endsection
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
        <h1 class="m-0">Proses Keberangkatan</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Proses Keberangkatan</a></li>
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
              <div class="card-body">

              <form method="POST" action="{{route('adminproseskeberangkatanedit','1')}}" enctype="multipart/form-data">
                                <div class="body">
                                    @csrf
                                    @method('put')

                                    <label>Persiapan Keberangkatan Haji Nomor 1</label>
                                    <div class="form-group"><input type="text" name="olahraga" id="olahraga" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->olahraga}} " class="form-control  @error ('olahraga') is-invalid @enderror"></div>
                                    <div class="form-group">
                                        <TEXTAREA name="olahragaisi" id="olahragaisi" class="form-control">{{$data1->olahragaisi}}</TEXTAREA>
                                    </div>

                                    <hr>
                                    <label>Persiapan Keberangkatan Haji Nomor 2</label>
                                    <div class="form-group"><input type="text" name="vaksinasi" id="vaksinasi" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->vaksinasi}} " class="form-control  @error ('vaksinasi') is-invalid @enderror"></div>
                                    <div class="form-group">
                                        <TEXTAREA name="vaksinasiisi" id="vaksinasiisi" class="form-control">{{$data1->vaksinasiisi}}</TEXTAREA>
                                    </div>

                                    <hr>
                                    <label>Persiapan Keberangkatan Haji Nomor 3</label>
                                    <div class="form-group"><input type="text" name="kesehatan" id="kesehatan" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->kesehatan}} " class="form-control  @error ('kesehatan') is-invalid @enderror"></div>

                                    <div class="form-group">
                                        <TEXTAREA name="kesehatanisi" id="kesehatanisi" class="form-control">{{$data1->kesehatanisi}}</TEXTAREA>
                                    </div>

                                    <hr>
                                    <label>Persiapan Keberangkatan Haji Nomor 4</label>
                                    <div class="form-group"><input type="text" name="istirahat" id="istirahat" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->istirahat}} " class="form-control  @error ('istirahat') is-invalid @enderror"></div>

                                    <div class="form-group">
                                        <TEXTAREA name="istirahatisi" id="istirahatisi" class="form-control">{{$data1->istirahatisi}}</TEXTAREA>
                                    </div>

                                    <hr>
                                    <label>Persiapan Keberangkatan Haji Nomor 5</label>
                                    <div class="form-group"><input type="text" name="obat" id="obat" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->obat}} " class="form-control  @error ('obat') is-invalid @enderror"></div>

                                    <div class="form-group">
                                        <TEXTAREA name="obatisi" id="obatisi" class="form-control">{{$data1->obatisi}}</TEXTAREA>
                                    </div>

                                    <hr>
                                    <label>Persiapan Keberangkatan Haji Nomor 6</label>
                                    <div class="form-group"><input type="text" name="perjalanan" id="perjalanan" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->perjalanan}} " class="form-control  @error ('perjalanan') is-invalid @enderror"></div>

                                    <div class="form-group">
                                        <TEXTAREA name="perjalananisi" id="perjalananisi" class="form-control">{{$data1->perjalananisi}}</TEXTAREA>
                                    </div>

                                    <hr>
                                    <label>Persiapan Keberangkatan Haji Nomor 7</label>
                                    <div class="form-group"><input type="text" name="perlengkapan" id="perlengkapan" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->perlengkapan}} " class="form-control  @error ('perlengkapan') is-invalid @enderror"></div>

                                    <div class="form-group">
                                        <TEXTAREA name="perlengkapanisi" id="perlengkapanisi" class="form-control">{{$data1->perlengkapanisi}}</TEXTAREA>
                                    </div>

                                    <hr>
                                    <label>Persiapan Keberangkatan Haji Nomor 8</label>
                                    <div class="form-group"><input type="text" name="keuangan" id="keuangan" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->keuangan}} " class="form-control  @error ('keuangan') is-invalid @enderror"></div>

                                    <div class="form-group">
                                        <TEXTAREA name="keuanganisi" id="keuanganisi" class="form-control">{{$data1->keuanganisi}}</TEXTAREA>
                                    </div>


                                    <hr>
                                    <label>Persiapan Keberangkatan Haji Nomor 9</label>
                                    <div class="form-group"><input type="text" name="imantaqwa" id="imantaqwa" placeholder="Masukan Judul Proses Keberangkatan Haji" value="{{$data1->imantaqwa}} " class="form-control  @error ('imantaqwa') is-invalid @enderror"></div>

                                    <div class="form-group">
                                        <TEXTAREA name="imantaqwaisi" id="imantaqwaisi" class="form-control">{{$data1->imantaqwaisi}}</TEXTAREA>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form>

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

