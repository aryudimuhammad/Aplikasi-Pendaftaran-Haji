<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h4,
        h2 {
            font-family: serif;
        }

        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th {
            text-align: center;
        }

        td {
            text-align: center;
        }

        br {
            margin-bottom: 5px !important;
        }

        .judul {
            text-align: center;
        }

        .header {
            margin-bottom: 0px;
            text-align: center;
            height: 110px;
            padding: 0px;
        }

        .pemko {
            margin-top: -10px !important;
            width: 80%;
            height: 80%;
        }

        .logo {
            float: left;
            margin-right: 0px;
            width: 18%;
            padding: 0px;
            text-align: right;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 72%;
            padding-left: 0px;
            padding-right: 10%;
        }

        hr {
            margin-top: 10%;
            height: 3px;
            background-color: black;
            width: 100%;
        }

        .ttd {
            margin-left: 65%;
            text-align: center;
            text-transform: uppercase;
        }

        .text-right {
            text-align: right;
        }

        .isi {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img class="pemko" src="{{ asset('/back/bg.png') }}">
        </div>
        <div class="headtext">
            <h4 style="margin:0px;">PEMERINTAH PROVINSI KALIMANTAN SELATAN</h4>
            <h3 style="margin:0px;">KEMENTRIAN AGAMA KOTA BANJARBARU </h3>
            <p style="margin:0px;">Jl. Panglima Batur Barat No.6, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70714
            </p>
        </div>
        <br>
    </div>
    <div class="container">
        <hr style="margin-top:1px;">
        <div class="isi">
            <h3 style="text-align:center;">KRITIK DAN SARAN</h3>
            <table id="myTable" class="table table-bordered table-striped dataTable no-footer text-center" role="grid"
                aria-describedby="myTable_info">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama User</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Pertanyaan 1</th>
                        <th scope="col" class="text-center">Pertanyaan 2</th>
                        <th scope="col" class="text-center">Pertanyaan 3</th>
                        <th scope="col" class="text-center">Pertanyaan 4</th>
                        <th scope="col" class="text-center">Pertanyaan 5</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td scope="col" class="text-center">{{ $loop->iteration }}</td>
                        <td scope="col" class="text-center">{{ $d->user->name }}</td>
                        <td scope="col" class="text-center">{{ $d->user->email }}</td>
                        <td scope="col" class="text-center">{{ $d->pertanyaan1 }}</td>
                        <td scope="col" class="text-center">{{ $d->pertanyaan2 }}</td>
                        <td scope="col" class="text-center">{{ $d->pertanyaan3 }}</td>
                        <td scope="col" class="text-center">{{ $d->pertanyaan4 }}</td>
                        <td scope="col" class="text-center">{{ $d->pertanyaan5 }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <br>
           {{-- <div class="ttd">
                <p style="margin:0px"> Banjarbaru, {{$now}}</p>
                <h6 style="margin:0px">Mengetahui</h6>
                <h5 style="margin:0px">Kepala Balai</h5>
                <br>
                <br>
                <h5 style="text-decoration:underline; margin:0px"></h5>
                <h5 style="margin:0px">NIP. 19681112 199903 1 007</h5>
            </div> --}}
            <br>
            <br>
            <div class="text-right">
            <button id="btnPrint" class="btn btn-lg" style="width: 150px; height:40px; background-color:rgb(147, 147, 181); color:white;" onclick="PrintWindow()">Cetak</button>
            {{-- <input id="btnPrint" type="button" value="Print" onclick="PrintWindow()" /> --}}
        </div>
        </div>
    </div>
    <script type="text/javascript">
        function PrintWindow() {
            var btnPrint = document.getElementById("btnPrint");
            btnPrint.style.visibility = 'hidden';
            window.print()
            btnPrint.style.visibility = 'visible';
        }
    </script>
        </div>
    </div>
</body>

</html>
