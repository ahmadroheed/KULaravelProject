<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            [
                'student_name' =>'Ahmad',
                'student_fname' =>'Samad',	
                'password' =>'Admin@123',
                'email' =>'test@gmail.com',
                'created_at'=>now(),
                'updated_at' =>now()	
            ]
        );
    }
}
