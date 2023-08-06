<div class="modal fade text-left" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1" style="padding-left: 10px;">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="body">
                        @csrf
                        <label>Nama Lengkap</label>
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap"
                                value="{{old('name')}}"
                                class="form-control  @error ('name') is-invalid @enderror">
                            @error('nama')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>E-Mail</label>
                        <div class="form-group">
                            <input type="text" name="email" id="email" placeholder="Masukkan E-Mail"
                                value="{{old('email')}}"
                                class="form-control  @error ('email') is-invalid @enderror">
                            @error('email')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Password</label>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Masukkan Password"
                                value="{{old('password')}}"
                                class="form-control  @error ('password') is-invalid @enderror">
                            @error('password')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Alamat</label>
                        <div class="form-group">
                            <textarea type="text" name="alamat" id="alamat" value="{{old('alamat')}}" class="form-control"></textarea>
                        </div>

                        <label>Nomor HP/WA</label>
                        <div class="form-group">
                            <input type="number" name="telepon" id="telepon" placeholder="Masukkan Nomor HP/WA"
                                value="{{old('telepon')}}"
                                class="form-control  @error ('telepon') is-invalid @enderror">
                            @error('telepon')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Jenis Kelamin</label>
                        <div class="form-group">
                        <select class="custom-select form-control-border" name="jk" id="jk">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>

                        <label>Noporsi</label>
                        <div class="form-group">
                            <input type="number" name="noporsi" id="noporsi" placeholder="Masukkan Noporsi"
                                value="{{old('noporsi')}}"
                                class="form-control  @error ('noporsi') is-invalid @enderror">
                            @error('noporsi')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label for="persyaratan">persyaratan </label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="persyaratan" name="persyaratan" value="{{old('persyaratan')}}">
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
