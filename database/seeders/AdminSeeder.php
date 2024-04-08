<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [ 
      
        'role'=> 'Admin',
        'name'=>'Janine Rosales',
        'email' => 'janinerosales@gmail.com',
        'password' => Hash::make('12345678'),
            ]
            ]);

            DB::table('abouts')->insert ([
                [ 
            'name'=> 'Janine R. Rosales',      
            'profile' => 'Graphic Designer',
            'birthday' => '2002-09-13',
            'address' => 'Brgy Sto.Nino Hilongos, Leyte',
            'zipcode' => '6524',
            'email' => 'rhosalesj@gmail.com',
            'phone' => '09268261787',
            
            
                ]
                ]);
    }
}
