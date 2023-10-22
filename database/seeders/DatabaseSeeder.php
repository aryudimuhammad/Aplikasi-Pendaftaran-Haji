<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('users')->insert([

            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role' => 1,
            'created_at' => $faker->date('2023,07,02'),
        ]);



            $faker = Faker::create('id_ID');

            for ($i = 0; $i < 15; $i++) {
                DB::table('users')->insert([
                    'name' => $faker->firstNameFemale,
                    'email' => $faker->email,
                    'password' => Hash::make('123'),
                    'role' => 2,
                    'created_at' => $faker->date('2023,07,02'),
                ]);
            }


            DB::table('pendaftarans')->insert([
                'user_id' => 1,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
                'created_at' => $faker->date('2023,07,02'),
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 2,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
                'created_at' => $faker->date('2023,07,02'),
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 3,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
                'created_at' => $faker->date('2023,07,02'),
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 4,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
                'created_at' => $faker->date('2023,07,02'),
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 5,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
                'created_at' => $faker->date('2023,07,02'),
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 6,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 7,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 8,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 9,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 10,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 11,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 12,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 13,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 14,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 15,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'created_at' => $faker->date('2023,07,02'),
                'tahun' => $faker->date('2023,07,02'),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);









            $faker = Faker::create('id_ID');

            for ($i = 0; $i < 5; $i++) {
                DB::table('pembayarans')->insert([
                    'pendaftaran_id' => $faker->unique()->numberBetween(6,10),
                    'bank' => 'BNI Syariah',
                    'jumlah' => 49800000,
                    'tanggal_bayar' => $faker->date('2023,07,02'),
                    'bukti' => 'bni.jpg',
                    'validasi' => $faker->unique()->randomNumber(5,true),
                    'created_at' => $faker->date('2023,07,02'),
                ]);
            }


            $faker = Faker::create('id_ID');

            for ($i = 0; $i < 5; $i++) {
                DB::table('pembayarans')->insert([
                    'pendaftaran_id' => $faker->unique()->numberBetween(6,10),
                    'bank' => 'BNI Syariah',
                    'jumlah' => 49800000,
                    'tanggal_bayar' => $faker->date('2023,07,02'),
                    'bukti' => 'bni.jpg',
                    'validasi' => $faker->unique()->randomNumber(5,true),
                    'created_at' => $faker->date('2023,07,02'),
                ]);
            }


            DB::table('proseskeberangkatans')->insert([
                'id' => 1,
                'olahraga' => 'Rutin berolahraga',
                'olahragaisi' => 'Untuk menjaga kebugaran fisik, rutin berolahraga adalah jawabannya. Olahraga tertatur sangat dianjurkan bagi Anda yang ingin berangkat menunaikan ibadah haji. Tidak perlu melakukan jenis olahraga berat, Anda cukup rutin melakukan olahraga ringan, seperti jalan santai, jogging, bersepeda, atau berenang selama 30 menit setiap harinya. Dengan rutin berolahraga, tubuh Anda tidak hanya akan menjadi lebih segar atau dapat mengontrol tekanan dan gula darah saja, namun juga dapat membiasakan tubuh untuk bergerak secara teratur dan tidak kaget saat nanti melaksanakan rangkaian ibadah haji.',
                'vaksinasi' => 'Vaksinasi meningitis dan influenza',
                'vaksinasiisi' => 'Sejak tahun 2002 lalu, pemerintah Kerajaan Arab Saudi mewajibkan seluruh jamaah haji dari semua negara untuk melakukan vaksinasi meningitis dan influenza. Kedua penyakit yang tersebar melalui virus tersebut sangat berbahaya, sehingga Anda wajib mempersiapkan kesehatan fisik dengan menerima vaksin. Untuk melakukan vaksin, Anda bisa berkunjung ke bandara-bandara yang menyiapkan klinik khusus vaksinasi. Di Jakarta, klinik khusus vaksinasi bisa Anda temukan di Bandara Halim Perdanakusuma dan Rumah Sakit Fatmawati. Biasanya, beberapa biro perjalanan haji juga memasukkan vaksinasi kedua jenis penyakit tersebut dalam paket perjalanan.',
                'kesehatan' => 'Cek kesehatan secara menyeluruh',
                'kesehatanisi' => 'Sebelum menunaikan ibadah haji, Anda juga perlu untuk melakukan cek kesehatan secara menyeluruh. Konsultasikanlah keluhan kesehatan yang mungkin Anda miliki kepada dokter untuk mengatasi dan mempersiapkan fisik Anda dalam kondisi prima. Jangan menyepelekan pemeriksaan secara menyeluruh, karena menderita sakit di Tanah Suci bukan hanya merepotkan, namun juga membuat ibadah haji Anda berjalan tak lancar. Dengan melakukan pemeriksaan kesehatan secara menyeluruh, Anda dapat melakukan antisipasi dan pengobatan dini terhadap penyakit yang mungkin timbul akibat kondisi tubuh yang kelelahan atau akibat kondisi lingkungan yang baru.',
                'istirahat' => 'Istirahat yang cukup',
                'istirahatisi' => 'Memastikan tubuh Anda mendapat waktu istirahat yang cukup juga penting sebagai persiapan haji. Hindari memaksakan diri untuk bekerja atau beraktivitas saat Anda sudah merasa sangat kelelahan. Bila Anda tidak memiliki waktu tidur yang cukup dan berkualitas, kesehatan Anda bisa saja terganggu menjelang jadwal keberangkatan hingga saat Anda sedang menunaikan ibadah haji di Tanah Suci. Oleh karena itu, sebaiknya perbanyak waktu istirahat sebelum melangsungkan perjalanan haji. Mengingat perjalanan dari Jakarta menuju Tanah Suci membutuhkan waktu sekitar sembilan jam, manfaatkanlah waktu tersebut untuk beristirahat agar tubuh Anda tetap fit dan sehat.',
                'obat' => 'Bawa obat-obat pribadi',
                'obatisi' => 'Perlengkapan P3K pasti sudah disiapkan oleh biro perjalanan yang membawa Anda ke Tanah Suci. Di Mekkah, Anda juga bisa mendapati banyak posko-posko kesehatan untuk merawat jamaah haji yang jatuh sakit. Namun, Anda tetap harus membawa obat-obatan pribadi yang Anda butuhkan selama menunaikan ibadah haji. Terlebih bila Anda menderita satu jenis penyakit tertentu yang menuntut Anda untuk mengonsumsi obat yang sudah diresepkan oleh dokter. Obat-obatan pribadi yang wajib Anda bawa, seperti minyak angin, minyak gosok, obat diare, obat anti nyamuk, hingga obat alergi yang mungkin Anda butuhkan selama perjalanan.',
                'perjalanan' => 'Mengurus Dokumen Perjalanan',
                'perjalananisi' => 'Persiapan sebelum berangkat haji yang tidak kalah penting adalah mengurus dokumen perjalanan, seperti visa dan paspor. Kamu jangan mengurus dokumen-dokumen tersebut mepet sebelum waktu keberangkatan ya. Karena kalau terjadi kendala, kamu masih ada waktu untuk memperbaikinya. Alhasil kamu tidak akan mengalami kendala di bandara atau saat tiba di Tanah Suci.',
                'perlengkapan' => 'Mempersiapkan Perlengkapan Ibadah',
                'perlengkapanisi' => 'Persiapan lain yang perlu kamu lakukan adalah memastikan perlengkapan yang diperlukan sudah dibawa, misalnya pakaian yang sesuai dengan aturan haji, alas kaki yang nyaman, dan perlengkapan mandi dan salat.',
                'keuangan' => 'Selesaikan Urusan Keuangan',
                'keuanganisi' => 'Pastikan kamu juga punya cukup waktu untuk menyelesaikan urusan keuangan sebelum berangkat ke Tanah Suci. Bayar semua tagihan dan pastikan bahwa kamu memiliki cukup uang untuk biaya hidup dan belanja selama di Tanah Suci.',
                'imantaqwa' => 'Perkuat Iman dan Takwa',
                'imantaqwaisi' => 'Ibadah haji adalah ibadah yang sangat suci dan berat. Maka dari itu lakukan kegiatan-kegiatan yang dapat mperkuat iman dan takwa, misalnya dengan membaca Al-Quran, berdoa, dan mengikuti pengajian. Itu semua akan membantu mempersiapkan diri secara mental dan spiritual sebelum berangkat.',
            ]);

            DB::table('caras')->insert([
                'id' => 1,
                'no' => '1',
                'isi' => 'Beragama Islam.',
            ]);

            DB::table('caras')->insert([
                'id' => 2,
                'no' => '2',
                'isi' => 'Berusia Minimal 12 Tahun pada saat pendaftaran.',
            ]);

            DB::table('caras')->insert([
                'id' => 3,
                'no' => '3',
                'isi' => 'Bagi yang sudah haji, bisa mendaftar kembali setelah 10 (sepuluh) tahun keberangkatan haji terakhir.',
            ]);

            DB::table('caras')->insert([
                'id' => 4,
                'no' => '4',
                'isi' => 'Scan KTP yang masih berlaku sesuai dengan domisili 3 lembar.',
            ]);

            DB::table('caras')->insert([
                'id' => 5,
                'no' => '5',
                'isi' => 'Scan Kartu Keluarga 1 lembar.',
            ]);

            DB::table('caras')->insert([
                'id' => 6,
                'no' => '6',
                'isi' => 'Scan Akte Kelahiran / kutipan akta nikah. ',
            ]);

            DB::table('caras')->insert([
                'id' => 7,
                'no' => '7',
                'isi' => 'Foto terbaru berwarna 3 x dan 4 x 6 = 2 Lembar, dengan latar belakang putih dengan ketentuan : Tampak wajah 80% (persen), Warna baju/kerudung harus kontras dengan latar belakang, Tidak memakai pakaian dinas, Tidak memakai kacamata, Bagi calon jemaah haji wanita wajib menggunakan busan muslimah.',
            ]);

            DB::table('caras')->insert([
                'id' => 8,
                'no' => '8',
                'isi' => 'Persyaratan Diatas Dijadikan 1 PDF..',
            ]);


            DB::table('prosedurs')->insert([
                'id' => 1,
                'no' => '1',
                'isi' => 'Datang ke Bank Penerima Setoran (BPS) Syariah untuk membuka rekening tabungan haji dengan setoran minimal Rp. 25.000.000,- ( dua puluh lima juta rupiah ).',
            ]);

            DB::table('prosedurs')->insert([
                'id' => 2,
                'no' => '2',
                'isi' => 'Meminta untuk diterbitkan NOMOR VALIDASI oleh Bank (Masa berlaku NOMOR VALIDASI 5 hari kerja terhitung setelah menerima dari BANK).',
            ]);

            DB::table('prosedurs')->insert([
                'id' => 3,
                'no' => '3',
                'isi' => 'Mengisi data dan mendaftar persyaratan Haji pada link Kemenag Pendaftaran Haji.',
            ]);

            DB::table('prosedurs')->insert([
                'id' => 4,
                'no' => '4',
                'isi' => 'Jika Calon Jemaah Haji sudah Menerima Bukti Setoran lunas dari bank penerima setoran.',
            ]);

            DB::table('prosedurs')->insert([
                'id' => 5,
                'no' => '5',
                'isi' => 'Maka proses administrator dan info mengenai tahun keberangkatan calon jemaah haji akan muncul.',
            ]);
    }
}
