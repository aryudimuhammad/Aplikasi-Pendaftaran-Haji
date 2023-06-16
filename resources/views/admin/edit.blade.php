<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="edit-modal-label" style="padding-left: 10px;">Edit Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    @csrf
                    <div class=" modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label class="col-form-label" for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error ('nama') is-invalid @enderror"
                                placeholder="Masukkan Nama Lengkap" name="nama" value="{{old('nama')}}"
                                id="nama" autofocus>
                            @error('nama')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label for="gambar">gambar</label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="gambar" name="gambar" value="{{old('gambar')}}">
                        </div>
                        <br>

                    </div>
                    <div class="edit modal-footer">
                        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="edit btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
