<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppoitmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('appoitments')->delete();
        
        \DB::table('appoitments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sajjad',
                'email' => 'sajjad@gmail.com',
                'date' => '2022-10-11',
                'doctor' => 'Dr.-Anzirun-Nahar-Asma',
                'phone' => '01719041636',
                'message' => 'hello doc',
                'status' => 'Approved',
                'user_id' => NULL,
                'created_at' => '2022-10-10 11:19:12',
                'updated_at' => '2022-10-11 03:09:38',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Sajjad Hossain',
                'email' => 'sinigdho01@gmail.com',
                'date' => '2022-10-29',
                'doctor' => 'Dr.-Anzirun-Nahar-Asma',
                'phone' => '01719041636',
                'message' => 'I have problem Hair Fall',
                'status' => 'In Progress',
                'user_id' => '10',
                'created_at' => '2022-10-12 12:20:04',
                'updated_at' => '2022-10-12 12:20:04',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Sajjad',
                'email' => 'sajjad@mail.com',
                'date' => '2022-11-24',
                'doctor' => 'Dr.-Anzirun-Nahar-Asma',
                'phone' => '01719041636',
                'message' => 'hi',
                'status' => 'Cancel',
                'user_id' => NULL,
                'created_at' => '2022-11-21 06:54:42',
                'updated_at' => '2022-11-21 06:56:35',
            ),
        ));
        
        
    }
}