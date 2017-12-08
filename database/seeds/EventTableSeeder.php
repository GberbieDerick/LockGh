<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new App\Event([
         'event_name'=>'Ghana meets Niger',
         'venue'=>'Accra International Conference Center',
         'date'=>'27th Dec.2017',
         'time'=>'7:00pm',
         'rate'=>'20 Cedis',
         'flier_image'=>'img/img13.jpg',
         'description'=>'This is an internationl program where Ghanaian and Nigerian Musicians in the industry come to battle it out'

        ]);
        $event->save();

         $event = new App\Event([
         'event_name'=>'Ghana meets Niger',
         'venue'=>'Accra International Conference Center',
         'date'=>'27th Dec.2017',
         'time'=>'7:00pm',
         'rate'=>'20 Cedis',
         'flier_image'=>'img/img12.jpg',
         'description'=>'This is an internationl program where Ghanaian and Nigerian Musicians in the industry come to battle it out'

        ]);
        $event->save();
        $event = new App\Event([
         'event_name'=>'Ghana meets Niger',
         'venue'=>'Accra International Conference Center',
         'date'=>'27th Dec.2017',
         'time'=>'7:00pm',
         'rate'=>'20 Cedis',
         'flier_image'=>'img/img12.jpg',
         'description'=>'This is an internationl program where Ghanaian and Nigerian Musicians in the industry come to battle it out'

        ]);
        $event->save();
    }
}
