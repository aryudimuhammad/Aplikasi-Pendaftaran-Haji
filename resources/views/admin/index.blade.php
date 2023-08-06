@extends('layouts.app')
@section('title') Pendaftaran Haji @endsection
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
        <h1 class="m-0">Pendaftaran Haji</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Pendaftaran Haji</a></li>
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
                        <button class="btn btn-outline-info" data-toggle="modal" data-target="#modalTambah">
                            <span><i class="feather icon-plus"></i> Tambah Data</span>
                        </button>
                        &emsp14;
                        <button class="btn btn-outline-info dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="feather icon-printer"></i> Cetak Data</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" target="_blank" href="{{route('report.pendaftarYearFilter')}}">Cetak Pendaftar Akun</a>
                                    <a class="dropdown-item" target="_blank" href="{{route('report.pendaftarhajiYearFilter')}}">Cetak Pendaftar Haji</a>
                                    <a class="dropdown-item" target="_blank" href="{{route('report.berangkathajiYearFilter')}}">Cetak Keberangkatan</a>
                                    <a class="dropdown-item" target="_blank" href="{{route('report.pembatalanhajiYearFilter')}}">Cetak Pembatalan</a>
                                    <a class="dropdown-item" target="_blank" href="{{route('report.pembayaranbankFilter')}}">Cetak Pembayaran Berdasarkan Bank</a>
                                    <a class="dropdown-item" target="_blank" href="{{route('report.grafik')}}">Grafik Pendaftaran</a>
                                    <a class="dropdown-item" target="_blank" href="{{route('report.grafikuser')}}">Grafik Akun Baru</a>
                                    <a class="dropdown-item" target="_blank" href="{{route('report.pendaftarhajiYearFilter')}}">Grafik Perbandingan Pendaftaran Haji Dan Akun</a>
                        </div>
                    </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Noporsi</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Alamat</th>
                    <th scope="col" class="text-center">Total Pembayaran</th>
                    <th scope="col" class="text-center">Persyaratan</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $d)
                    <tr>
                        <td scope="col" class="text-center">{{ $loop->iteration }}</td>
                        <td scope="col" class="text-center">{{ $d->noporsi }}</td>
                        <td scope="col" class="text-center">{{ $d->user->name }}</td>
                        <td scope="col" class="text-center">{{ $d->user->email }}</td>
                        <td scope="col" class="text-center">{{ $d->alamat }}</td>
                        <td scope="col" class="text-center">
                            @if ($d->total_pembayaran == null)
                            -
                            @else
                            Rp. {{number_format($d->total_pembayaran, 0, ',', '.')}},-
                            @endif
                        </td>
                        <td scope="col" class="text-center"><a class="btn btn-info" href="{{ asset('public/persyaratan/'.$d->persyaratan) }}" target="_blank">Lihat</a></td>
                        <td scope="col" class="text-center">
                            @if ($d->status == 1)
                                Belum Lunas
                                @elseif ($d->status == 2)
                                Lunas
                                @elseif ($d->status == 3)
                                Dibatalkan
                            @endif
                        </td>
                        <td scope="col" class="text-center">
                            <a class="btn btn-sm btn-info text-white" href="{{ route('pembayaran.index', $d->id) }}">
                                <i class="fas fa-eye"></i>
                              </a>
                              @if ($d->total_pembayaran == !null)
                              <a class="btn btn-sm btn-info text-white" href="{{ route('report.pembayaranuser', $d->id) }}">
                                <i class="fas fa-print"></i>
                              </a>
                              @endif
                            <a class="btn btn-sm btn-info text-white" href="{{route('adminpendaftaranedit', $d->id)}}"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                            <button data-target="#modaldelete" data-toggle="modal" type="button" class="delete btn btn-sm bg-danger" data-link="{{ route('adminpendaftarandelete',$d->id) }}"> <i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
        </div>
    </div>
</section>
@include('admin.create')
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
    $('.delete').on('click', function(){
    var link = $(this).data('link');
    $('#formDelete').attr('action',link)
    });
</script>
@endsection

