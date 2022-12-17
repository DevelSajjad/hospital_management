<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '01719041636',
                'address' => 'Shampur,Nawabganj,Dinajpur',
                'usertype' => '1
',
                'email_verified_at' => '2022-10-12 11:04:13',
                'password' => '$2y$10$jdfn0mZoon7Sdoj39WiV/Ou3b9mp/DMtQ82Oh4.HukFIkAWowMZaG',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-10-10 09:56:37',
                'updated_at' => '2022-10-12 11:04:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sajjad',
                'email' => 'sajjad@gamil.com',
                'phone' => '01719041636',
                'address' => 'Shampur,Nawabganj,Dinajpur',
                'usertype' => '0',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eh8L08mjODLaLUjcJL4jmOlRH84d/7R1UvT6zcvYjxRdDm/IWAvge',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-10-10 10:55:59',
                'updated_at' => '2022-10-10 10:55:59',
            ),
            2 => 
            array (
                'id' => 10,
                'name' => 'Sinigdho',
                'email' => 'sinigdho01@gmail.com',
                'phone' => '01719041636',
                'address' => 'Shampur,Nawabganj,Dinajpur',
                'usertype' => '0',
                'email_verified_at' => '2022-10-12 12:17:05',
                'password' => '$2y$10$etdkjOFkpLr5qisVlbcSs.YHycv3iqN8koRjgV/Ax/b3zap0JqdgW',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-10-12 12:15:53',
                'updated_at' => '2022-10-12 12:17:05',
            ),
        ));
        
        
    }
}