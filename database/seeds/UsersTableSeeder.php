<?php

use Illuminate\Database\Seeder;
use App\User;
use App\ClassUser;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_admin = ClassUser::where('ClassUser', 'Admin')->first();
        $user1 = new User([
        	'id' => '1',
        	'nama' => 'Admin',
        	'email' => 'admin@gmail.com',
            'password' => Hash::make('123123'),
    
        ]);
        $role_admin->users()->save($user1);

        $role_pelatih = ClassUser::where('ClassUser', 'Pelatih')->first();
        $user2 = new User([
        	'id' => '2',
        	'nama' => 'Pelatih',
        	'email' => 'pelatih@gmail.com',
            'password' => Hash::make('123123'),
        ]);
        $role_pelatih->users()->save($user2);

        $role_pencari = ClassUser::where('ClassUser', 'Pencari')->first();
        $user3 = new User([
        	'id' => '3',
        	'nama' => 'Pencari',
        	'email' => 'pencari@gmail.com',
            'password' => Hash::make('123123'),
        ]);
        $role_pencari->users()->save($user3);
    }
}
