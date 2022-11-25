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
            'email' => env('MAIN_ADMIN_EMAIL'),
            'password' => Hash::make(env('MAIN_ADMIN_PASSWORD'))
        ]);


        \App\Models\Profile::create([

            'USER_SID'=>randomString(),
            'Name' => 'Ka RL',
            'Bio' => 'ƙ♬Ʀɭ / .𝕶 𝖆 𝖗 𝖑 - ° 𝕭 |🇬🇧!',
            'localBio' => 'Full Stack Developer',
            'userType' => 1,
            'Message' => "Hello👋 , I appreciate that you are looking at my small site that I've made, anyway this is just an profile image of me just explaining about myself, and I hope that we will be friends.",
            'user_id'=> 1
        ]);

        // \App\Models\Group::create([
        //     'Name'=>'Karl',
        //     'Bio' => 'test Bio',
        //     'owner_id' => 1
        // ]);
    }
}
