<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [ 
                'student_id' => '4',
                'book_id' => '1',
                'subject' => 'Filipino',    
                'class_start' => '7:30 am',
                'class_end' => '8:30 am'

            ],
            [  
                'student_id' => '4',
                'book_id' => '2',
                'subject' => 'Rizal',
                'class_start' => '10:30 am',
                'class_end' => '11:30 am'

            ],
            [
                'student_id' => '4',
                'book_id' => '3',
                'subject' => 'Programming',
                'class_start' => '2:30 pm',
                'class_end' => '4:00 pm'

            ],
            [
                'student_id' => '4',
                'book_id' => '4',
                'subject' => 'Business',
                'class_start' => '3:00 pm',
                'class_end' => '4:30 pm'

            ],
        ];
        foreach($subjects as $u){
            Subject::create($u);
        }
    }
}
