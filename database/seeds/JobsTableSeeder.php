<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
            'user_id'=>1,
            'job_title' => 'Customer Service Rep'
            ],[
            'user_id'=>1,
            'job_title' => 'Administrative Assistant'
                ]
            ]);
    }
}
