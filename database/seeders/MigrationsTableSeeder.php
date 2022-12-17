<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 9,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 10,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 11,
                'migration' => '2014_10_12_200000_add_two_factor_columns_to_users_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 12,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 13,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 14,
                'migration' => '2022_10_08_100604_create_sessions_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 15,
                'migration' => '2022_10_10_081606_create_doctors_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 16,
                'migration' => '2022_10_10_094754_create_appoitments_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 17,
                'migration' => '2022_10_12_112942_create_notifications_table',
                'batch' => 2,
            ),
        ));
        
        
    }
}