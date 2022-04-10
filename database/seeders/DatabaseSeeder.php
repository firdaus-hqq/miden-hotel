<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\User;
use App\Models\Kamar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@midenhotel.com',
            'password' => bcrypt('rahasiabos'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Resepsionis',
            'email' => 'resepsionis@midenhotel.com',
            'password' => bcrypt('rahasiabos'),
            'role' => 'resepsionis'
        ]);

        Kamar::create([
            'nama_tipe' => 'Deluxe',
            'deskripsi' => 'Menampilkan ruang 32 meter persegi yang nyaman, berfungsi sebagai tipe kamar yang sempurna untuk tamu yang ingin menikmati keseimbangan sempurna antara akomodasi berkualitas tinggi dan penawaran bernilai tinggi selama kunjungan mereka di kota ini',
            'harga' => '500000',
            'jumlah' => '10',
            'gambar' => 'deluxeraw.jpg'
        ]);

        Kamar::create([
            'nama_tipe' => 'Executive',
            'deskripsi' => 'Kamar Eksekutif menampilkan kombinasi gaya art deco yang kaya dengan akomodasi Hotel modern berkualitas tinggi di dalam ruang seluas 55 meter persegi, memberikan kesempatan eksklusif untuk menikmati hidup di salah satu kamar Hotel terbaik di kota.',
            'harga' => '710000',
            'jumlah' => '10',
            'gambar' => 'executiveraw.jpg'
        ]);

        Kamar::create([
            'nama_tipe' => 'Family Suite',
            'deskripsi' => 'Sempurna untuk keluarga, pasangan, atau bahkan tamu individu yang ingin menikmati privasi dan ruang lebih, Family Suite adalah kamar seluas 167 meter persegi dengan 2 kamar tidur, ruang tamu, dan dapur kecil yang dirancang untuk melengkapi kunjungan Anda ke kota ini dengan suasana yang hangat dan ramah. tempat yang benar-benar terasa seperti rumah.',
            'harga' => '920000',
            'jumlah' => '10',
            'gambar' => 'familysuiteraw.jpg'
        ]);

        Form::create([
            'kamar_id' => '1',
            'tgl_checkin' => '2022-04-06',
            'tgl_checkout' => '2022-04-08',
            'jumlah_kamar' => '1',
            'email' => 'ujang@mail.com',
            'no_telepon' => '081428893845',
            'nama_tamu' => 'Ujang',
            'Harga' => '1000000',
            'status' => 'menunggu'
        ]);

        Form::create([
            'kamar_id' => '2',
            'tgl_checkin' => '2022-04-12',
            'tgl_checkout' => '2022-04-15',
            'jumlah_kamar' => '1',
            'email' => 'budi@mail.com',
            'no_telepon' => '081428893845',
            'nama_tamu' => 'Budi',
            'Harga' => '2400000',
            'status' => 'menunggu'
        ]);
    }
}
