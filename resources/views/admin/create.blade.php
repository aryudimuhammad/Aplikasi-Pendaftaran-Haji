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
                            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap"
                                value="{{old('nama')}}"
                                class="form-control  @error ('nama') is-invalid @enderror">
                            @error('nama')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>E-Mail</label>
                        <div class="form-group">
                            <input type="text" name="email" id="email" placeholder="Masukkan E-Mail"
                                value="{{old('email')}}"
                                class="form-control  @error ('email') is-invalid @enderror">
                            @error('email')<div class="invalid-feedback"> {{$message}} </div>@enderror
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

                        <label for="pembayaran">Pembayaran Tahap 1</label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="pembayaran" name="pembayaran" value="{{old('pembayaran')}}">
                        </div>
                        <label for="bukti">Bukti Pembayaran Lunas</label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="bukti" name="bukti" value="{{old('bukti')}}">
                        </div>
                        <label for="ktp">KTP</label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="ktp" name="ktp" value="{{old('ktp')}}">
                        </div>
                        <label for="kk">Kartu Keluarga</label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="kk" name="kk" value="{{old('kk')}}">
                        </div>
                        <label for="akte">Akte Kelahiran</label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="akte" name="akte" value="{{old('akte')}}">
                        </div>
                        <label for="foto">Foto</label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="foto" name="foto" value="{{old('foto')}}">
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
