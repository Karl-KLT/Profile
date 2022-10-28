<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::create([
            'email' => 'mohamed@gmail.com',
            'password' => Hash::make('Hcode0110')
        ]);


        \App\Models\Profile::create([
            'Name'=>'Karl',
            'Bio' => 'test Bio',
            'Message' => 'message for test',
            'user_id'=>1
        ]);
    }
}
