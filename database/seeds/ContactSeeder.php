<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'phone_number' => '(00974) 12345678',
            'whatsapp_number' => '(00974) 12345678',
            'facebook_link' => '#',
            'instagram_link' => '#',
            'linkedin_link' => '#',
            'twitter_link' => '#',
            'website_link' => 'https://wizegenie.com',
            'email' => 'support@wizegenie.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
