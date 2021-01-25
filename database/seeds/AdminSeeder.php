<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'email' => 'admin@gmail.com',
                'name' => 'Benbelgacem Hichem',
                'password' => '$2y$10$ARp4Q5VJRqedg0Awd2kDnerMuXAKcpR7wZ2k.7qVO92KKtdbg3q76', // password
                'remember_token' => null,
                'created_at' => now(),
                'updated_at'=> now()
            ]
        ]);
    }
}
