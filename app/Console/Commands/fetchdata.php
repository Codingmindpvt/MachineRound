<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class fetchdata extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetchdata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show me api data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
   {
   
      
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://dummy.restapiexample.com/api/v1/employees",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "authorization: Basic Og==",
        "cache-control: no-cache",
        "postman-token: 874964e7-da8d-1611-bf4a-8fb4a4c4642b",
        "shopiefy_app_secret_key: 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"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }}
   
}
