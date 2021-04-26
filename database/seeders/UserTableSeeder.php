<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '01791205437',
            'password' => bcrypt('123456'),
            'role' => 'admin',
            'image' => 'ayon.jpg',
            'address' => 'Pingna,Jamalpur,Sarishabari',

        ]);
    }
}
