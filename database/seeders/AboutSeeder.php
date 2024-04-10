<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'judul_website' => 'pemesanan Online',
            'logo' => 'logo.jpg',
            'deskripsi' => 'tulis deskripsi',
            'alamat' => 'alamat',
            'email' => 'admin@mail.com',
            'atas_nama' => 'nama pemilik',
            'no_rekening' => '01239',
            'telepon'=>'0857'
        ]);
    }
}
