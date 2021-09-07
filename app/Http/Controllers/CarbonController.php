<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CarbonController extends Controller
{
    public function index()
    {
        $current = Carbon::now();
        echo $current ."<br>";
        $today = Carbon::today();
        echo $today."<br>";
        $yesterday = Carbon::yesterday();
        echo $yesterday."<br>";
        $string = new Carbon("first day of Jan 2017");
        echo $string."<br>";
        $trialExpires = $current->addDays(30);
        echo $trialExpires."<br>";
        echo $trialExpires->toDateTimeString()."<br>";
        echo $trialExpires->toFormattedDateString()."<br>";
        echo $trialExpires->toDayDateTimeString()."<br>";
        echo $current->format('l jS \of F Y h:i:s A')."<br>";

    }
}
