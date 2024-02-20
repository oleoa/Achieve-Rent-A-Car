<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use App\Models\FAQ;
use App\Models\Discounts;
use App\Models\User;

/*
    This class is used to save and get data from files
    All the static database data is stored in a single file
    This class is used to save and get data from this file
*/
class Saver
{
    public function get($filename)
    {
        // Will search for the file in the public directory
        $filepath = public_path($filename);

        // Get the file contents
        $data = File::get($filepath);

        // Decode the JSON data
        $data = json_decode($data, true);

        // If the data is empty, return an empty array
        if($data == null) $data = [];

        // Return the data
        return $data;
    }
    
    private function save($filename, $data)
    {
        // Will search for the file in the public directory
        $filepath = public_path($filename);

        // Encode the data to JSON
        $data = json_encode($data);

        // Save the data to the file
        File::put($filepath, $data);
    }
    private function model($model, $type)
    {
        // Get all the types
        $new = $model::all()->toArray();

        // Get the existing data
        $data = $this->get('saver/'.$type.'.json');

        // Save the new data to a new timestamp
        $data[time()] = $new;

        // Save the data to the file
        $this->save('saver/faq.json', $data);
    }

    /* Functions for the controllers to use */
    public function faq()
    {
        $this->model(FAQ::class, 'faq');
    }
    public function discounts()
    {
        $this->model(Discounts::class, 'discounts');
    }
    public function users()
    {
        $this->model(User::class, 'users');
    }
}
