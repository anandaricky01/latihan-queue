<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanQueueController extends Controller
{
    public function index(){
        $start_time = microtime(true);

        $faker = factory(App\User::class)->make(10000);

        $end_time = microtime(true);
        $interval = $start_time - $end_time;

        return json_encode([
            'message' => 'Waktu eksekusi adalah : ' . $interval
        ]);
    }
}
