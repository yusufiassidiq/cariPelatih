<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KategoriOlahragaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_olahraga')->insert([
            [
            'namaOlahraga' => 'Renang',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
            ],
            [
            'namaOlahraga' => 'Tenis Lapang',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
            ],
            [
            'namaOlahraga' => 'Basket',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
            ],
            [
            'namaOlahraga' => 'Badminton',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
            ],
            [
            'namaOlahraga' => 'Sepak Bola',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
            ],
            [
            'namaOlahraga' => 'Karate',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta'),
            ],
        ]);
    }
   
}
