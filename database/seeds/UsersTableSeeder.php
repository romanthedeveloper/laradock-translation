<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name' =>  'Anton',
            'email' =>  'antontest@gmail.com',
            'is_admin' => true,
            'email_verified_at' => now(),
            'password' =>  Hash::make("123123123"),
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'name' =>  'Nir',
            'email' =>  'nirtest@gmail.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make("123123123"),
            'remember_token' => Str::random(10),
        ]);
    }
}
