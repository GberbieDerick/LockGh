<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_name','venue','date','time','rate','flier_image','description'];
}
