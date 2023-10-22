<div class="modal fade text-left" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
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
            <form method="post" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    @csrf
                    <div class=" modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label class="col-form-label" for="no">Nomor Prosedur</label>
                            <input type="text" class="form-control @error ('no') is-invalid @enderror"
                                placeholder="Masukkan Nomor Prosedur" name="no" value="{{old('no')}}"
                                id="no" autofocus>
                            @error('no')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="isi">Isi Prosedur</label>
                            <textarea type="text" class="form-control @error ('isi') is-invalid @enderror"
                                placeholder="Masukkan Isi Prosedur" name="isi" value="{{old('isi')}}"
                                id="isi" autofocus></textarea>
                            @error('isi')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

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
