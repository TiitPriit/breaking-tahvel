<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetGrades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-grades';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::withHeaders([
            'Cookie' => 'SESSION=NzFjZDAzMTItMGY0Ni00MDU0LWIzOWUtNzZjYmI4NjMzY2My; haridStateToken=adb3593d-257f-4952-bca7-09ad9db56309; XSRF-TOKEN=105dc70c-2992-4587-916c-429c3b905de7'
        ])->get('https://tahvel.edu.ee/hois_back/journals/studentJournals', [
            'studentId' => 88078,
            'studyYearId' => 668,
        ]);
        
        $data = $response->json();
        
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}
