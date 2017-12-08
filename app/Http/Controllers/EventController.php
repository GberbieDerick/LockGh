<?php

namespace App\Http\Controllers;
use App\Event;


use Illuminate\Http\Request;

class EventController extends Controller
{
    

    public function getIndex(){
       $events = Event::all();
    	return view('home',['events'=>$events]);
    }
}
