<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'bio' => 'Admin della pagina',
            'image' => 'https://picsum.photos/200' 
        ]);

        for($i=0; $i<20; $i++){
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->password()),
                'bio' => $faker->text(100),
                'image' => 'https://picsum.photos/200'
                
            ]);
         }
        
    }
}
