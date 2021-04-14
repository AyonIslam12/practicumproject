<?php

namespace Database\Seeders;

use App\Models\Backend\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach(range(1,10) as $index){

            Customer::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
                'photo' =>  $faker->imageUrl(),
                'age' =>  rand(22,30),
                'nid_num' =>  rand(12345678921,12345678912),
                'gender' =>  'male' ,
                'contact' =>  $faker->tollFreePhoneNumber ,
                'address' =>  $faker->address ,
                'status' =>  'active',


            ]);

        }
    }
}
