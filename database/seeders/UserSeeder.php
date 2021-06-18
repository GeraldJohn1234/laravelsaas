<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Thread;
use App\Reply;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'Teams' = factory(Teams::class)->crete([
        //     'name' => 'CodeTisans'
        // ]);
        // DB::table('Team')->insert([
        //     'name' => Str::make('CodeTisans'),
        // ]);
            
        $team = Team::create([
            'name' => 'CodeTisans',
        ]);


        User::create([
            'name' => 'John',
            'last_name' => 'Doe',
            'team_id' => $team ->id,
            // Team::factory()->id,
            'email' => 'test@example.com',
            'password' => Hash::make('11111111'),
        ]);


        // 'user' = factory(User::class)->crete([
        //     'name' => 'John',
        //     'last_name' => 'Doe',
        //     'Team_id' => $Teams->id,
        //     'email' => 'test@example.com'
        // ]);
        // DB::table('user')->insert([
        //     'name' => Str::make('John'),
        //     'last_name' => Str::make('Doe'),
        //     'Team_id' => $Teams->id,
        //     'email' => Str::make('johndoe@gmail.com'),
        
        // ]);
    }
}
