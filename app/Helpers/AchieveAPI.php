<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class AchieveAPI
{
    const API_URL = "https://achieverac.api.anyrent.pt/v1/";

    private $client;
    private $token;
    private $expiration;

    public function __construct()
    {
        $this->client = new Client([
            'verify' => false
        ]);

        $this->authorize();
    }
    
    private function authorize()
    {
        $response = $this->client->get($this::API_URL.'authorize?api_key='.env('API_KEY'));
        
        $data = json_decode($response->getBody()->getContents(), true);

        $this->token = $data['token'];
        $this->expiration = $data['expiration'];

        return $data;
    }

    private function refresh()
    {
        if($this->expiration > time()) return;
        $response = $this->client->get($this::API_URL.'refresh?token='.$this->token);
        $data = json_decode($response->getBody()->getContents(), true);
        dd($data);
        $this->token = $data['token'];
        $this->expiration = $data['expiration'];
    }

    private function get($endpoint)
    {
        // If the token is expired, refresh it
        $this->refresh();

        // Get the data
        $response = $this->client->get($this::API_URL.$endpoint.'?token='.$this->token);
        
        // Decode the data from json
        $data = json_decode($response->getBody()->getContents(), true);

        // Return the data
        return $data;
    }

    public function fleet()
    {
        return $this->get('fleets');
    }
}
