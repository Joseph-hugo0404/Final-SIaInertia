<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                'student_name' => 'Joseph Hugo', 
                'address' => 'Cawayan, Inabanga, Bohol', 
                'phone_number' => '09164956490', 
                'stud_id' => '11086', 
                'year' => 'Third Year',
                'fav_subject' => 'History',
                'school_name' => 'Mater Dei College',
                'age' => '21'
                
            ],
            [
                'student_name' => 'Michael Porter Jr.', 
                'address' => 'Ilaud, Inabanga, Bohol', 
                'phone_number' => '09178955840', 
                'stud_id' => '10116', 
                'year' => 'First Year',
                'fav_subject' => 'Science',
                'school_name' => 'Mater Dei College',
                'age' => '18'
                
            ],
            [
                'student_name' => 'Virnie Gudia', 
                'address' => 'Luyo, Inabanga, Bohol', 
                'phone_number' => '09458956789', 
                'stud_id' => '10086', 
                'year' => 'Second Year',
                'fav_subject' => 'Math',
                'school_name' => 'Mater Dei College',
                'age' => '25'
                
            ],
            [
                'student_name' => 'John Paun Smith', 
                'address' => 'Napo, Inabanga, Bohol', 
                'phone_number' => '09164989790', 
                'stud_id' => '11078', 
                'year' => 'Third Year',
                'fav_subject' => 'Filipino',
                'school_name' => 'Mater Dei College',
                'age' => '22'
                
            ],
           
        ];
        foreach($students as $s){
            Student::create($s);
        }
    }
}




