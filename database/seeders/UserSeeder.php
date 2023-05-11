<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $users=[
        //     [
        //         "name"=>"visal",
        //         "email"=>"visal1@gmail.com",
        //         "password"=>Hash::make("12345")
        //     ],
        //     [
        //         "name"=>"visal boy Loy",
        //         "email"=>"visal2@gmail.com",
        //         "password"=>Hash::make("12345")
        //     ],
        //     [
        //         "name"=>"visal sart",
        //         "email"=>"visal3@gmail.com",
        //         "password"=>Hash::make("12345")
        //     ],
        //     [
        //         "name"=>"visal sal",
        //         "email"=>"visal4@gmail.com",
        //         "password"=>Hash::make("12345")
        //     ],
        //     [
        //         "name"=>"visal sa",
        //         "email"=>"visa5l@gmail.com",
        //         "password"=>Hash::make("12345")
        //     ]
        // ];
        
        // foreach($users as $user){
        //     User::create($user);
        // }
    }
}
