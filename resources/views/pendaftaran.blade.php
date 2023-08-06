<!-- Pendaftaran Interests-->
<section class="resume-section" id="interests">
    <div class="resume-section-content">
        <h2 class="mb-5">Pendaftaran Haji</h2>

        <form method="POST" enctype="multipart/form-data" action="{{route('pendaftaranstore')}}">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" >
            <div class="card-body">

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea type="alamat" class="form-control" id="alamat"> </textarea>
            </div>

            <div class="form-group">
                <label for="telepon">No. HP/WA</label>
                <input type="telepon" class="form-control" id="telepon" placeholder="Nomor HP/WA">
            </div>

            <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <br>
            <select class="custom-select form-control-border" id="jk">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>

            <div class="form-group">
                <label for="novaldi">Nomor Validasi</label>
                <input type="novaldi" class="form-control" id="novaldi" placeholder="Nomor Validasi dari Bank">
            </div>

            <div class="form-group">
                <label for="persyaratan">File input Persyaratan </label>
                <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="persyaratan">
                    <label class="custom-file-label" for="persyaratan">Choose file</label>
                </div>
                </div>
            </div>


    </div>
    <!-- /.card-body -->
    <br>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    </div>
</section>
<hr class="m-0" />
