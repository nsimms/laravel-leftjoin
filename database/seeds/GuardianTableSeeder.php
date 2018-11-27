<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GuardianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guardians')->insert([
            [
                'student_id' => '1',
                'name' => 'bobs dad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => '1',
                'name' => 'bobs mum',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => '3',
                'name' => 'jims mum',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => '4',
                'name' => 'marys mum',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => '4',
                'name' => 'marys dad',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
