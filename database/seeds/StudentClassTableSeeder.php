<?php

use Illuminate\Database\Seeder;

class StudentClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_class')->insert([
            ['rollnumber'=>'A001','classId'=>'T1707M','date'=>'20-10-2017','status'=>1],
            ['rollnumber'=>'A002','classId'=>'T1707M','date'=>'20-10-2017','status'=>1],
            ['rollnumber'=>'A003','classId'=>'T1707M','date'=>'20-10-2017','status'=>1],
            ['rollnumber'=>'A004','classId'=>'T1707M','date'=>'20-10-2017','status'=>1],
            ['rollnumber'=>'A005','classId'=>'T1707M','date'=>'20-10-2017','status'=>1],
            ['rollnumber'=>'A006','classId'=>'T1707M','date'=>'20-10-2017','status'=>1],
        ]);
    }
}
