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
                'apk_link' => '#',
                'apk_status' => 'Yes',
                'ios_link' => '#',
                'ios_status' => 'No',
                'status' => 'Yes',
            ]
        ]);
    }
}
