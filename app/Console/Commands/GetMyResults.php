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
            'Cookie' => 'SESSION=ODQ4MzkyZWEtYWNiMi00YzI4LWEyZWUtN2NkODk3YTMwY2Uz; haridStateToken=1e778700-1ded-4d19-88e7-37c85bf65062; XSRF-TOKEN=52a1762f-03e9-42c9-bc8a-ae712d0feaf2'
        ])->get('https://tahvel.edu.ee/hois_back/students/88084');

        $data = $response->json();
        
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}
