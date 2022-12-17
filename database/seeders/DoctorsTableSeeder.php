<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doctors')->delete();
        
        \DB::table('doctors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dr. Muhammad Moniruzzaman',
                'phone' => '01716564152',
                'speciality' => NULL,
                'room' => '302',
                'image' => '1665496557.jpg',
                'created_at' => '2022-10-10 10:58:39',
                'updated_at' => '2022-10-11 13:55:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dr.-Anzirun-Nahar-Asma',
                'phone' => '01719041636',
                'speciality' => 'Skin',
                'room' => '300',
                'image' => '1665399572.jpg',
                'created_at' => '2022-10-10 10:59:32',
                'updated_at' => '2022-10-10 10:59:32',
            ),
        ));
        
        
    }
}