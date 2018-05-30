<?php

use Illuminate\Database\Seeder;

class AttenSlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
}
