<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\userJob;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\Factory;

class LatihanQueueController extends Controller
{
    public function index(){
        $start_time = microtime(true);

        $job = new userJob();
        $this->dispatch($job);
        $end_time = microtime(true);
        $interval = $start_time - $end_time;

        return json_encode([
            'message' => 'Waktu eksekusi adalah : ' . $interval
        ]);
    }
}
