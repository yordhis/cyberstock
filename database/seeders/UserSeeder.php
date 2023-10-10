<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new User();
       $user->name = "root"; 
       $user->email = "@root"; 
       $user->password = Hash::make("24823972"); 
       $user->rol = 1; 
       $user->phone = "0414-353-4569"; 
       $user->address = "www.cyberstaffstore.com"; 
       $user->save();
        
    }
}
