<?php

use Illuminate\Database\Seeder;

class JobseekerSeeder extends Seeder
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
            $jobseeker = \App\Models\Jobseeker::create([
                'address' => $faker->address,
                'country' => $faker->country,
                'city' => $faker->city,
                'education_level' => $index % 2 === 0 ? 'low' : 'high',
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
                    'password' => bcrypt('jobseeker'),
                    'userable_id' => $index,
                    'userable_type' => 'App\Models\Jobseeker' ,
                    'gender' => $index % 2 === 0 ? 'Male' : 'Female',
                    'created_at' => now(),
                    'updated_at'=> now()
                ]
            );
        }
    }
}
