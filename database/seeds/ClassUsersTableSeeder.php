<?php

use Illuminate\Database\Seeder;
use App\ClassUser;

class ClassUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = ClassUser::create([
            'ClassUser' => 'Admin',
        ]);
        $role1->save();

        $role2 = ClassUser::create([
            'ClassUser' => 'Pelatih',
        ]);
        $role2->save();

        $role3 = ClassUser::create([
            'ClassUser' => 'Pencari',
        ]);
        $role3->save();
    }
}
