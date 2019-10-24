<?php

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
        // $this->call(UsersTableSeeder::class);
        // seeding table userclass
        $this->call(ClassUsersTableSeeder::class);
        // seeding table user
        $this->call(UsersTableSeeder::class);
        // seeding table kategori olahraga
        $this->call(KategoriOlahragaTableSeeder::class);
    }
}
