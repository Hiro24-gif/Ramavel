<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TanggapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengaduanRow = DB::table('pengaduans')->first();
        $pengaduanID = $pengaduanRow->id_pengaduan;

        $petugasRow = DB::table('petugass')->first();
        $petugasID = $petugasRow->id_petugas; // Corrected column name

DB::table('tanggapans')->insert([
    "id_tanggapan" => random_int(1, 20),
    "id_pengaduan" => $pengaduanID,
    "tgl_tanggapan" => now(),
    "tanggapan" => Str::random(255),
    "id_petugas" => $petugasID,
]);
    }}
