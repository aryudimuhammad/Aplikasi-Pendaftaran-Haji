@extends('layouts.app')
@section('title') Edit Pendaftaran @endsection
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
        <h1 class="m-0">Edit Pendaftaran</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Edit Pendaftaran</a></li>
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
                            <form method="POST" action="{{route('adminpendaftaranupdate', $data->id)}}" enctype="multipart/form-data">
                                <div class="body">
                                    @csrf
                                    @method('put')
                                    <label>Nama</label>
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" placeholder="Masukan Nama"
                                            value="{{ $data->user->name }}"
                                            class="form-control  @error ('name') is-invalid @enderror">
                                        @error('nama')<div class="invalid-feedback"> {{$message}} </div>@enderror
                                    </div>

                                    <label>Jenis Kelamin</label>
                                    <div class="form-group">
                                    <select class="custom-select form-control-border" name="jk" id="jk">
                                        <option value="Laki-Laki" {{ $data->jk == "Laki-Laki" ? 'selected' : '' }}>Laki-Laki</option>
                                        <option value="Perempuan" {{ $data->jk == "Perempuan" ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    </div>

                                    <label>password</label>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" placeholder="Masukkan password Jika Ingin Mengubah"
                                            value="{{old('password')}}"
                                            class="form-control  @error ('password') is-invalid @enderror">
                                        @error('password')<div class="invalid-feedback"> {{$message}} </div>@enderror
                                    </div>

                                    <label>Alamat</label>
                                    <div class="form-group">
                                        <textarea type="text" name="alamat" id="alamat" class="form-control">{{$data->alamat}}</textarea>
                                    </div>

                                    <label>Nomor HP/WA</label>
                                    <div class="form-group">
                                        <input type="number" name="telepon" id="telepon" placeholder="Masukkan Nomor HP/WA"
                                            value="{{$data->telepon}}"
                                            class="form-control  @error ('telepon') is-invalid @enderror">
                                        @error('telepon')<div class="invalid-feedback"> {{$message}} </div>@enderror
                                    </div>

                                    <label>Noporsi</label>
                                    <div class="form-group">
                                        <input type="text" name="noporsi" id="noporsi" placeholder="Masukkan Noporsi"
                                            value="{{$data->noporsi}}"
                                            class="form-control  @error ('noporsi') is-invalid @enderror">
                                        @error('noporsi')<div class="invalid-feedback"> {{$message}} </div>@enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="custom-select form-control-border" id="status">
                                            <option value="1" {{ $data->status == "1" ? 'selected' : '' }}>Belum Lunas</option>
                                            <option value="2" {{ $data->status == "2" ? 'selected' : '' }}>Lunas</option>
                                        </select>
                                        </div>

                                        <label>Jadwal Berangkat</label>
                                        <div class="form-group">
                                            <input type="date" name="tahun" id="tahun" placeholder="Masukkan tahun"
                                                value="{{$data->tahun}}"
                                                class="form-control  @error ('tahun') is-invalid @enderror">
                                            @error('tahun')<div class="invalid-feedback"> {{$message}} </div>@enderror
                                        </div>

                                    <label for="persyaratan">persyaratan</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="persyaratan" name="persyaratan">
                                    </div>
                                    <br>
                                </div>
                                <div class="card-footer">
                                    <a type="button" href="{{route('adminpendaftaran')}}" class="btn btn-danger text-white" >Kembali</a>
                                    <button type="submit" class="btn btn-primary">Edit</button>
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

