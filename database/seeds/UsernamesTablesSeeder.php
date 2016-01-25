<?php

use Illuminate\Database\Seeder;

class UsernamesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usernames')->insert([
            
            'user_id' =>1,
            'username'=>str_random(8)
            ]);
    }
}
