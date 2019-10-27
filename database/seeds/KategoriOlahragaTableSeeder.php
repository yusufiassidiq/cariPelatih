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
        //
        DB::table('kategori_olahraga')->insert([
            [
            'namaOlahraga' => 'Renang',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'namaOlahraga' => 'Tenis Lapang',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'namaOlahraga' => 'Basket',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'namaOlahraga' => 'Badminton',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'namaOlahraga' => 'Sepak Bola',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'namaOlahraga' => 'Karate',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
