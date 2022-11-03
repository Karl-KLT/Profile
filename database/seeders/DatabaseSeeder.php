<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Devsecure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Devsecure::create([
            'DevSecure'=>false
        ]);

        \App\Models\User::create([
            'email' => 'mohamed@gmail.com',
            'password' => Hash::make('Hcode0110')
        ]);


        \App\Models\Profile::create([
            'Name' => 'Karl',
            'Bio' => 'test Bio',
            'userType' => 1,
            'Message' => 'message for test',
            'user_id'=> 1
        ]);

        // \App\Models\Group::create([
        //     'Name'=>'Karl',
        //     'Bio' => 'test Bio',
        //     'owner_id' => 1
        // ]);
    }
}
