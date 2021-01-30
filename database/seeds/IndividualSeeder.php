<?php

use Illuminate\Database\Seeder;

class IndividualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach ((range(1, 50)) as $index) {
            $jobseeker = \App\Models\Individual::create([
                'address' => $faker->address,
                'country' => $faker->country,
                'city' => $faker->city,
                'nationality' => 'Any',
                'created_at' => now(),
                'updated_at'=> now()
            ]);

            DB::table('users')->insert(
                [
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'status' => 'active',
                    'phone_number' => $faker->e164PhoneNumber,
                    'email' => $faker->unique()->email,
                    'password' => bcrypt('individual'),
                    'userable_id' => $index,
                    'userable_type' => 'App\Models\Individual',
                    'gender' => $index % 2 === 0 ? 'Male' : 'Female',
                    'created_at' => now(),
                    'updated_at'=> now()
                ]
            );
        }
    }
}
