<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(50)->create()->each(function ($user) {
            // dd($user->id);
            $faker = \Faker\Factory::create('en_IN');
            Profile::factory()->create([
                'user_id' => $user->id,
                'name' => $user->name,
                "phone" => $faker->phoneNumber('501-###-###'),
                "pincode" => $faker->postcode,
                "area" => $faker->localityName(),
                "district" => $faker->locality(),
                "city" => $faker->city(),
                "caste" => $faker->word(),
                "job" => $faker->jobTitle() . ' at ' . $faker->company(),
                "job" => $faker->jobTitle(),



                "star" => $faker->word(),

                
                "education" => $faker->word(),
                "hobbies" => $faker->word(),

                "foodpreference" => $faker->randomElement(['Vegetarian', 'Non-Vegetarian','vegan']),
                "height" => $faker->randomFloat(1, 1, 2),
                "weight" => $faker->numberBetween(0, 100),

                "marital_status" => $faker->randomElement(['Single', 'Divorced','Widowed']),
                "description" => $faker->paragraph(5),




            ]);
        });

        // User::factory(1)->create()->each(function($user) {
        //     Profile::factory()->create([
        //         'user_id' => $user->id,
        //         'name' => $user->name
        //     ]);
        // });




        // $faker = \Faker\Factory::create();
        // $home = User::join('profile', 'users.id', '=', 'profile.user_id');
        // $home->insert([
        //     'name' => $faker->firstName(),
        //     'lname' => $faker->lastName(),
        //     'gender' =>  $faker->randomElement(['male', 'female']),
        //     'religion' =>  $faker->randomElement(['Hindu', 'Christian', 'Muslim']),
        //     'dob' => $faker->date($format = 'Y-m-d', $max = '1998-12-31'),
        //     'email' => $faker->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        //     'profile.user_id' =>'s'
        // ]);


    }
}
