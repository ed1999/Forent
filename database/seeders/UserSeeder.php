<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=> 'Carlos Eduardo Miranda Valtierra',
            'email' => 'cmirandavaltierra@gmail.com',
            'password' => bcrypt('12345678')

        ]);

        $user->assignRole('Admin');

        $user = User::create([
            'name'=> 'Analy',
            'email' => 'analy@gmail.com',
            'password' => bcrypt('12345678')

        ]);

        $user->assignRole('Arrendador');
        

        User::factory(99)->create();
    }
}
