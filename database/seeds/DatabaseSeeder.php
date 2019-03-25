<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('events')->insert([
        	'name'=> Str::random(10),
        	'description'=> Str::random(10),
        ]);
    }
}
