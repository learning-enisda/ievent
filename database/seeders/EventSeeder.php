<?php

namespace Database\Seeders;

use App\Models\Creator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // Sample creator
        $creator1 = Creator::create(['name'=>'Enisda']);
        $creator2 = Creator::create(['name'=>'Rafii']);
        $creator3 = Creator::create(['name'=>'Jessika']);
        // Sample event
        $event1 = Event::create(
            [
                'title'=>'Webinar sukses PKM',
                'time'=>'2021-11-01 12:00:00',
                'location' =>'Zoom Meeting',
                'creator_id'=>$creator1->id
            ]);
            $event2 = Event::create(
            [
                'title'=>'Kuliah',
                'time'=>'2021-12-02 10:00:00', 
                'location' =>'University of Sari Mulia',
                'creator_id'=>$creator2->id
            ]);
            $event3 = Event::create(
            [
                'title'=>'New Year Party',
                'time'=>'2021-12-31 00:00:00', 
                'location' =>'Anywhere',
                'creator_id'=>$creator3->id
            ]);
    }
}