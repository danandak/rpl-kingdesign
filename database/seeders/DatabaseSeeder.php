<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jasa;
use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'kingdesign',
            'email' => 'kingdesign@gmail.com',
            'password' => bcrypt('password')
        ]);

        Jasa::create([
            'nama_jasa' => 'Desain Flyer',
            'deskripsi_jasa' => 'Kami membuat desain yang menarik secara professional untuk produk anda',
        ]);

        Status::create([
            'pesan' => 'Sedang di proses'
        ]);

        // Pesanan::create([
        //     'user_id' => '995c3c55-0899-4c4c-a634-d31982ffc7c1',
        //     'jasa_id' => 1,
        //     'status_id' => 1,
        //     'nama_pembeli' => 'Danan',
        //     'no_telp' => '857',
        //     'deskripsi_pesanan' => 'dummy order',
        //     'tanggal_pemesanan' => 2023-06-22 22:00:00,
        //     'tanggal_selesai' => 2023-07-22 23:50:00
        // ])
    }
}
