<?php

use Illuminate\Database\Seeder;

class AppinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appinfo')->insert([
            [
                'app_link' => '#',
                'status' => 'Yes',
            ],
            [
                'app_link' => '#',
                'status' => 'No',
            ]
        ]);
    }
}
