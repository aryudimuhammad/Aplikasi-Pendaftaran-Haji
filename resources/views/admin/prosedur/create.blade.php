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
                        <label>Nomor Prosedur Pendaftaran Haji</label>
                        <div class="form-group">
                            <input type="text" name="no" id="no" placeholder="Masukkan Nomor Prosedur Pendaftaran Haji"
                                value="{{old('no')}}"
                                class="form-control  @error ('no') is-invalid @enderror">
                            @error('nama')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Isi Prosedur Pendaftaran Haji</label>
                        <div class="form-group">
                            <textarea class="form-control" name="isi" id="isi" placeholder="Masukkan Isi Prosedur Pendaftaran Haji"> </textarea>
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
