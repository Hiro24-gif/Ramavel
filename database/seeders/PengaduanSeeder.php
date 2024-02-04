<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nikRow = DB::table('masyarakats')->first();
        $nik = $nikRow->nik;

        DB::table('pengaduans')->insert([
            "id_pengaduan" => random_int(1, 20),
            "tgl_pengaduan" => now(),
            "nik" => $nik,
            "isi_laporan" => Str::random(255),
            "foto" => Str::random(255),
            "status" => '0'
        ]);
    }
}
