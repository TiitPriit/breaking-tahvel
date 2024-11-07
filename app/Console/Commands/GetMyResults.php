<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetMyResults extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-my-results';

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
            'Cookie' => 'SESSION=ZWIxNzQwYzYtOGRhNC00MDAxLWEzOTgtZjBiMTUzNmFlYzk3; haridStateToken=ddd3084a-106f-4f1d-a05e-5ab4462e8695; XSRF-TOKEN=f821096e-a617-40b6-9d05-0c267d55b493'
        ])->get('https://tahvel.edu.ee/hois_back/students/88078');

        $data = $response->json();
        
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}
