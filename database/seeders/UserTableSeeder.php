<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin data insert through seeder
        User::create(
            [
                'name'=>'ety',
                'email'=>'ety@gmail.com',
                'password'=>bcrypt('331999'),
                'NID'=>'2345678213456',
                'Address'=>'Dhaka',
                'Gender'=>'Female',
                'DOB'=>'03-03-1999',
                'mobile'=>'01730972988',
                'role'=>'admin',
                'bio' => 'Admin of Tour planning management system.',
                'image'=>'admin.jpg'
                
            
            ]
        );
    }
}
