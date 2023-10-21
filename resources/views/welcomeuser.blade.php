<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kementerian Agama Kota Banjarbaru</title>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="{{asset('front/css/styles.css')}}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('front/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/dist/css/adminlte.min.css')}}">
        <style type="text/css">
        .justify { text-align: justify;}
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid mx-auto mb-2" src="{{asset('front/bg.png')}}" style="width: 120px;"></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Hi! {{ Auth::user()->name }} </a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Persiapan Haji</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cara">Tata Cara Pendaftaran</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#daftar">Pendaftaran Haji</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Kontak</a></li>
                    <li class="nav-item"> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                <p> Log Out</p>
            </a>
                <form id="logout-form" action="{{ route('logout') }}"
                                `   method="POST" class="d-none">
                                    @csrf
                </form>  </li>
                </form>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        KEMENAG
                        <span class="text-primary">BANJARBARU</span>
                    </h1>
                    <div class="subheading mb-5">
                    Jl. Panglima Batur Barat No.6, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70714</a>
                    </div>
                    <p class="justify">kementerian Agama Kota Banjarbaru berkomitmen akan memberikan informasi yang bermanfaat bagi para pengunjung,  kami berharap masyarkat bisa memberikan masukan dan kontribusi bagi perkembangan kementerian agama kota banjarbaru dalam memberikan pelayanan kepada masyarkat. </p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://kemenag-banjarbaru.id/"><i class="fab fa-periscope"></i></a>
                        <a class="social-icon" href="https://www.instagram.com/kemenagkalsel/?hl=en"><i class="fab fa-instagram"></i></a>
                        <a class="social-icon" href="https://twitter.com/intent/tweet?text=Penmad%3A+Gunakan+Medsos+Sebagai+Upaya+Mendukung+Program+Kemenag+-&url=https%3A%2F%2Fkalsel.kemenag.go.id%2Fberita%2F579506%2FPenmad-Gunakan-Medsos-Sebagai-Upaya-Mendukung-Program-Kemenag"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/kemenag.banjarbaru/?locale=id_ID"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon" href="https://www.youtube.com/watch?v=vtRrOlJQlQI"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Persiapan Keberangkatan Haji</h2>
                    <p class="justify">Kemampuan jamaah adalah salah satu syarat wajib melaksanakan ibadah haji. Tidak hanya kemampuan finansial,
                        kemampuan fisik juga harus diperhatikan. Memiliki kondisi fisik yang prima termasuk syarat seseorang dapat menunaikan ibadah haji mengingat pelaksanaan haji cukup menguras tenaga.
                        Sejumlah rangkaian ibadah haji, seperti thawaf, sai tujuh putaran, hingga proses lempar jumrah menuntut jamaah untuk memiliki kondisi fisik yang kuat. Oleh karena itu juga, sangat penting bagi Anda untuk mempersiapkan persiapan keberangkatan haji dengan baik sebelum berangkat haji, khususnya bagi Anda yang sudah lanjut usia.
                        Berikut informasi lengkapnya.</p><br>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">1. {{$data1->olahraga}}</h5><br>
                            <p class="justify"><small>{{$data1->olahragaisi}}</small></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">2. {{$data1->vaksinasi}}</h5><br>
                            <p class="justify"><small>{{$data1->vaksinasiisi}}</small></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">3. {{$data1->kesehatan}}</h5><br>
                            <p class="justify"><small>{{$data1->kesehatanisi}}</small></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">4. {{$data1->istirahat}}</h5><br>
                            <p class="justify"><small>{{$data1->istirahatisi}}</small></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">5. {{$data1->obat}}</h5><br>
                            <p class="justify"><small>{{$data1->obatisi}}</small></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">6. {{$data1->perjalanan}}</h5><br>
                            <p class="justify"><small>{{$data1->perjalananisi}}</small></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">7. {{$data1->perlengkapan}}</h5><br>
                            <p class="justify"><small>{{$data1->perlengkapanisi}}</small></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">8. {{$data1->keuangan}}</h5><br>
                            <p class="justify"><small>{{$data1->keuanganisi}}</small></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">9. {{$data1->imantaqwa}}</h5><br>
                            <p class="justify"><small>{{$data1->imantaqwaisi}}</small></p>
                        </div>
                    </div>

                </div>
            </section>
            <hr class="m-0" />
            <!-- cara-->
            <section class="resume-section" id="cara">
                <div class="resume-section-content">
                    <h2 class="mb-5">Tata Cara Pendaftaran Haji</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <b class="mb-0">PERSYARATAN PENDAFTARAN HAJI</b><br>
                            <p>
                            1. Beragama Islam. <br>
                            2. Berusia Minimal 12 Tahun pada saat pendaftaran. <br>
                            3. Bagi yang sudah haji, bisa mendaftar kembali setelah 10 (sepuluh) tahun keberangkatan haji terakhir. <br>
                            4. Scan KTP yang masih berlaku sesuai dengan domisili 3 lembar. <br>
                            5. Scan Kartu Keluarga 1 lembar.<br>
                            6. Scan Akte Kelahiran / kutipan akta nikah. <br>
                            7. Foto terbaru berwarna 3 x dan 4 x 6 = 2 Lembar, dengan latar belakang putih dengan ketentuan : <br>
                            Tampak wajah 80% (persen), Warna baju/kerudung harus kontras dengan latar belakang, Tidak memakai pakaian dinas, Tidak memakai kacamata, Bagi calon jemaah haji wanita wajib menggunakan busan muslimah.<br>
                            8. Persyaratan Diatas Dijadikan 1 PDF. <br>
                            </p>

                            <br>
                            <br>

                            <b>PROSEDUR PENDAFTARAN HAJI SECARA ONLINE</b>
                            <p>
                            1. Datang ke Bank Penerima Setoran (BPS) Syariah untuk membuka rekening tabungan haji dengan setoran minimal Rp. 25.000.000,- ( dua puluh lima juta rupiah ).<br>
                            2. Meminta untuk diterbitkan NOMOR VALIDASI oleh Bank (Masa berlaku NOMOR VALIDASI 5 hari kerja terhitung setelah menerima dari BANK).<br>
                            3. Mengisi data dan mendaftar persyaratan Haji pada <a href="#interests">Kemenag Pendaftaran Haji</a>.<br>
                            4. Jika Calon Jemaah Haji sudah Menerima Bukti Setoran lunas dari bank penerima setoran. <br>
                            5. Maka proses administrator dan info mengenai tahun keberangkatan calon jemaah haji akan muncul.
                            </p>
                            <br>
                            <br>
                            <img src="{{asset('front/sistem.png')}}" alt="usulan" style="width: 1000px;">

                            <br>
                            <b>BANK PENERIMA SETORAN ( BPS ) SYARIAH</b>
                            <p>
                            1. Bank BNI Syariah <br>
                            2. Bank BRI Syariah <br>
                            3. Bank Syariah Mandiri <br>
                            4. Bank Panin Dubai Syariah <br>
                            5. Bank BTN Syariah <br>
                            6. Bank Mega Syariah <br>
                            7. Bank Muamalat <br>
                            8. Bank CIMB- Niaga Syariah <br>
                            9. Bank Permata Syariah
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Kontak Login Awards-->
            <section class="resume-section" id="daftar">
                <div class="resume-section-content">
            <!-- Pendaftaran Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Pendaftaran Haji</h2>

                    @if($data == null)
                    <form action="{{route('pendaftaranstore')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="card-body">

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="alamat" name="alamat" class="form-control" id="alamat"> </textarea>
                </div>

                <div class="form-group">
                    <label for="telepon">No. HP/WA</label>
                    <input type="telepon" name="telepon" class="form-control" id="telepon" placeholder="Nomor HP/WA">
                </div>

                <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <br>
                <select name="jk" class="custom-select form-control-border" id="jk">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                </div>

                <div class="form-group">
                    <label for="novaldi">Nomor Porsi</label>
                    <input type="novaldi" name="noporsi" class="form-control" id="novaldi" placeholder="Nomor Porsi">
                </div>

                <div class="form-group">
                    <label for="persyaratan">File input Persyaratan </label>
                    <div class="input-group">
                    <div class="custom-file">
                        <input name="persyaratan" type="file" class="custom-file-input" id="persyaratan">
                        <label class="custom-file-label" for="persyaratan">Choose file</label>
                    </div>
                    </div>
                </div>


                </div>
                <!-- /.card-body -->
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @elseif($data == !null)
            <form action="{{route('pembayaranstore')}}" enctype="multipart/form-data" method="POST">
                @csrf

                        <div class="card-body">
                        <div class="form-group">
                        <label for="telepon">Nama</label>
                        <input type="telepon" name="telepon" class="form-control" id="telepon" value="{{$data->user->name}}" placeholder="Nomor HP/WA" readonly>
                        </div>


                        <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="alamat" name="alamat" class="form-control" id="alamat" readonly> {{$data->alamat}}</textarea>
                        </div>

                        <div class="form-group">
                        <label for="telepon">No. HP/WA</label>
                        <input type="telepon" name="telepon" class="form-control" id="telepon" value="{{$data->telepon}}" placeholder="Nomor HP/WA" readonly>
                        </div>

                        <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="jk" name="jk" class="form-control" id="jk" value="{{$data->jk}}" placeholder="Nomor HP/WA" readonly><br>
                        {{-- <select name="jk" class="custom-select form-control-border" id="jk" readonly>
                        <option value="Laki-Laki" {{ $data->jk == "Laki-Laki" ? 'selected' : '' }} readonly>Laki-Laki</option>
                        <option value="Perempuan" {{ $data->jk == "Perempuan" ? 'selected' : '' }} readonly>Perempuan</option>
                        </select>
                        </div> --}}

                        <div class="form-group">
                        <label for="novaldi">Nomor Porsi</label>
                        <input type="novaldi" name="noporsi" class="form-control" value="{{$data->noporsi}}" id="novaldi" placeholder="Nomor Porsi" readonly>
                        </div>

                        {{-- <div class="form-group">
                        <label for="persyaratan">File input Persyaratan </label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input name="persyaratan" type="file" class="custom-file-input" id="persyaratan">
                            <label class="custom-file-label" for="persyaratan">Choose file</label>
                        </div>
                        </div>
                        </div> --}}

                        @if ($data->total_pembayaran == null)
                        <div class="form-group">
                            <label for="novaldi">Total Pembayaran</label>
                            <h6>Anda Belum Melakukan Pembayaran, Jika Anda Sudah Melakukan Pembayaran Silahkan Upload Pembayaran Anda Di Bawah Ini</h6>
                            </div>
                        @else
                        <div class="form-group">
                        <label for="novaldi">Total Pembayaran</label>
                        <h6>Rp. {{number_format($data->total_pembayaran, 0, ',', '.')}},-</h6>
                        </div>
                        @endif
                @endif
                </div>
            </section>

            @if($data == null)

            @elseif($data == !null)
                @if ($data->status == 1)
                    <!-- Pembayaran Interests-->
                    <section class="resume-section" id="pembayaran">
                        <div class="resume-section-content">
                            <h2 class="mb-5">Pembayaran</h2>
                        <form action="{{route('pembayaranstore')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" name="pendaftaran_id" class="form-control" id="jumlah" value="{{$data->id}}" placeholder="Jumlah Pembayaran">
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Pembayaran">
                        </div>
                        <div class="form-group">
                            <label for="validasi">Nomor Validasi</label>
                            <input type="number" name="validasi" class="form-control" id="validasi" placeholder="validasi Pembayaran">
                        </div>
                        <div class="form-group">
                        <label for="bank">Bank</label>
                        <br>
                        <select name="bank" class="custom-select form-control-border" id="bank">
                            <option value="BNI Syariah">BNI Syariah</option>
                            <option value="BRI Syariah">BRI Syariah</option>
                            <option value="Syariah Mandiri">Syariah Mandiri</option>
                            <option value="Panin Dubai Syariah">Panin Dubai Syariah</option>
                            <option value="BTN Syariah">BTN Syariah</option>
                            <option value="Mega Syariah">Mega Syariah</option>
                            <option value="Muamalat">Muamalat</option>
                            <option value="CIMB- Niaga Syariah">CIMB- Niaga Syariah</option>
                            <option value="Permata Syariah">Permata Syariah</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_bayar">Tanggal Pembayaran</label>
                            <input type="date" name="noporsi" class="form-control" id="tanggal_bayar" placeholder="Nomor Porsi">
                        </div>

                        <div class="form-group">
                            <label for="bukti">File input Bukti Pembayaran </label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input name="bukti" type="file" class="custom-file-input" id="bukti">
                                <label class="custom-file-label" for="bukti">Choose file</label>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- /.card-body -->
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </section>
                    @elseif ($data->status == 2)
                    <div class="form-group">
                        <label for="novaldi">LUNAS</label>
                        <h6>Pembayaran Anda Telah LUNAS, Silahkan Tunggu Jadwal Keberangkatan Anda</h6>
                        @if ($data->tahun == !null)
                        <h6>Anda Akan Berangkat pada {{Carbon\carbon::parse($data->tahun)->translatedFormat('d-F-Y')}}</h6>
                        @endif
                    </div>
                    @endif

                @endif
                <hr class="m-0" />
                </div>
            </section>
            <hr class="m-0" />

            <!-- Kontak Login Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Visit Us <i class="fab fa-periscope"></i></h3><br>
                            <small>Kementerian Agama Kota Banjarbaru <br> Jl. Panglima Batur Bar., Loktabat Utara, Banjar Baru Utara, Kota Banjar Baru, Kalimantan Selatan 70714 </small>
                        </div>
                </div>

                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Contact <i class="fab fa-whatsapp"></i></h3><br>
                            <small>Phone: 05114780700 <br> Fax: (123) 456-7890 <br> klikaduankemenagbjb@gmail.com</small>
                        </div>
                </div>


                </div>

                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.91464072414178!2d114.82833332663326!3d-3.4388362621484467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6817415b945d7%3A0xa96351b5dfdf7391!2sReligious%20Ministry%20Office%20Banjarbaru!5e0!3m2!1sen!2sid!4v1686904452505!5m2!1sen!2sid" width="600" height="450" style="border:1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <hr class="m-0" />


        </div>
        <!-- Bootstrap core JS-->
        <script src="{{asset('front/js/scripts.js')}}"></script>
        <!-- jQuery -->
        <script src="{{asset('front/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('front/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- bs-custom-file-input -->
        <script src="{{asset('front/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('front/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('front/dist/js/demo.js')}}"></script>
        <!-- Page specific script -->
        <script>
        $(function () {
        bsCustomFileInput.init();
        });
        </script>
            </body>
        </html>
