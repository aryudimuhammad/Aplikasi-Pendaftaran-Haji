
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
                        <a class="btn btn-outline-info" href="{{ route('pembayaran.create', $id) }}">
                            <span><i class="feather icon-plus"></i> Tambah Data</span>
                        </a>
                        &emsp14;
                        {{-- <button class="btn btn-outline-info dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="feather icon-printer"></i> Cetak Data</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" target="_blank" href="#">Cetak Pendaftaran Haji</a>
                                    <button class="dropdown-item" target="_blank" data-toggle="modal" data-target="#modalcetaktglmasuk">Barang Masuk</button>
                                    <button class="dropdown-item" target="_blank" data-toggle="modal" data-target="#modalcetaktglkeluar">Barang Keluar/Terjual</button>
                                    <a class="dropdown-item" target="_blank" href="{#" target="_blank">Barang Terlaris</a>
                        </div> --}}
                    </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Bank</th>
                    <th scope="col" class="text-center">Tanggal Pembayaran</th>
                    <th scope="col" class="text-center">Jumlah Pembayaran</th>
                    <th scope="col" class="text-center">bukti</th>
                    <th scope="col" class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $d)
                    <tr>
                        <td scope="col" class="text-center">{{ $loop->iteration }}</td>
                        <td scope="col" class="text-center">{{ $d->bank }}</td>
                        <td scope="col" class="text-center">{{Carbon\carbon::parse($d->jumlah)->translatedFormat('d-F-Y')}}</td>
                        <td scope="col" class="text-center">Rp. {{number_format($d->jumlah, 0, ',', '.')}},-</td>
                        <td scope="col" class="text-center"><a class="btn btn-info" href="{{ asset('public/bukti/'. $d->bukti) }}" target="_blank">Lihat</a></td>
                        <td scope="col" class="text-center">
                            {{-- <a class="btn btn-sm btn-info text-white" ><i class="fa fa-pencil color-muted m-r-5"></i></a> --}}
                            <button data-target="#modaldelete" data-toggle="modal" type="button" class="delete btn btn-sm bg-danger" data-link="{{ route('pembayaran.destroy',$d->id) }}"> <i class="fa-solid fa-trash"></i></button>
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

@include('admin.delete')
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
    $('#editModal').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let nama = button.data('nama')
        let noporsi = button.data('noporsi')
        let email = button.data('email')
        let alamat = button.data('alamat')
        let status = button.data('status')
        let telepon = button.data('telepon')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #nama').val(nama);
        modal.find('.modal-body #noporsi').val(noporsi);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #alamat').val(alamat);
        modal.find('.modal-body #status').val(status);
        modal.find('.modal-body #telepon').val(telepon);

    })
</script>

<script>
    $('#editstok').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let stok = button.data('stok')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #stok').val(stok);
    })
</script>

<script>
    $('.delete').on('click', function(){
    var link = $(this).data('link');
    $('#formDelete').attr('action',link)
    });
</script>
@endsection

