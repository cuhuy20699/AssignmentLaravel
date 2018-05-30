<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([['rollnumber'=>'A001','name'=>'Ngọc Huy'],['name'=>'Vũ Hoàng','rollnumber'=>'A001'],
            ['name'=>'Quỳnh Anh','rollnumber'=>'A002'],
            ['name'=>'Ngô Lộc','rollnumber'=>'A003'],
            ['name'=>'Bình Minh','rollnumber'=>'A004'],
            ['name'=>'Phan Hùng','rollnumber'=>'A005'],
            ['name'=>'Ngọc Thảo','rollnumber'=>'A006'],
            ['name'=>'Đình Thái','rollnumber'=>'A007']]);
        DB::table('timeslots')->insert([['slotId'=>'1','timeslot'=>'8h-12h'],
            ['slotId'=>'2','timeslot'=>'13h-17h'],
            ['slotId'=>'3','timeslot'=>'18h-21h']
          ]);
        DB::table('class')->insert([['classId'=>'T1707M','start'=>'20-10-2017','status'=>'1'],
            ['classId'=>'T1708D','start'=>'20-11-2017','status'=>'1'],
            ['classId'=>'T1709H','start'=>'20-12-2017','status'=>'1']
        ]);
        DB::table('attendance_slots')->insert([[
            'slotid' => '22222',
            'date' => '8h-12h',
            'classId' => 'T1707M',
            'subject' => 'PHP',
        ], [
            'slotId' => '20655',
            'timeslot' => '13h30-17h30',
            'classId' => 'T1708A','subject' => 'ASF2',],
            [
            'slotId' => '20656','timeslot' => '17h30-21h','classId' => 'T1608E','subject' => 'EJB',
        ]]);

    }
//Schema::create('students', function (Blueprint $table) {
//            $table->increments('id')->primary();
//            $table->string('name');
//            $table->string('rollnumber');
//            $table->timestamps();
//        });
//        Schema::create('timeslots', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('slotId');
//            $table->string('timeslot');
//            $table->timestamps();
//        });
//        Schema::create('student_class', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('rollnumber');
//            $table->string('classId');
//            $table->string('date');
//            $table->integer('status');
//            $table->timestamps();
//        });
//        Schema::create('class', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('classId');
//            $table->string('start');
//            $table->integer('status');
//            $table->timestamps();
//        });
//        Schema::create('attendance_slots', function (Blueprint $table) {
//            $table->increments('id');
//            $table->integer('slotid');
//            $table->string('date');
//            $table->string('classId');
//            $table->string('subject');
//            $table->timestamps();
//        });
//        Schema::create('attendance_details', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('slotid');
//            $table->string('rollnumber');
//            $table->string('date');
//            $table->integer('status');
//            $table->timestamps();
//        });
}
