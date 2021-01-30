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
            'phone_number' => '(123) 345-6789',
            'whatsapp_number' => '(456) 478-2589',
            'facebook_link' => '#',
            'instagram_link' => '#',
            'linkedin_link' => '#',
            'twitter_link' => '#',
            'website_link' => 'www.wizejobportal.com',
            'email' => 'support@wizrgenie.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
