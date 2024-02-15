<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class AchieveAPI
{
    const API_URL = "https://achieverac.api.anyrent.pt/v1/";

    private $client;
    private $token;
    private $expiration;

    // Will create a new instance of the Guzzle client and authorize the token
    public function __construct()
    {
        $this->client = new Client([
            'verify' => false
        ]);

        $this->authorize();
    }
    
    // Will search for the tokey using the API KEY
    private function authorize()
    {
        $response = $this->client->get($this::API_URL.'authorize?api_key='.env('API_KEY'));
        
        $data = json_decode($response->getBody()->getContents(), true);

        $this->token = $data['token'];
        $this->expiration = $data['expiration'];

        return $data;
    }

    // Will refresh the token if it's expired, otherwise it will do nothing
    private function refresh()
    {
        if($this->expiration > time()) return;
        $response = $this->client->get($this::API_URL.'refresh?token='.$this->token);
        $data = json_decode($response->getBody()->getContents(), true);
        dd($data);
        $this->token = $data['token'];
        $this->expiration = $data['expiration'];
    }

    // Will get the data from the API from the given endpoint
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

    // Will return the fleet
    public function fleet($group = false)
    {
        if($group) return $this->get('fleets/groups');
        return $this->get('fleets');
    }

    // Will return the vehicles
    public function vehicles()
    {
        return $this->get('vehicles');
    }

    // Will return the bookings
    public function bookings()
    {
        return $this->get('bookings');
    }
}
