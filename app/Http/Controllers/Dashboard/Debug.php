<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use Illuminate\Support\Facades\File;

class Debug extends Controller
{
    public function on()
    {
        $key = 'APP_DEBUG';
        $value = 'true';

        if (File::exists(base_path('.env'))) {
            // Read the existing .env file
            $envFile = file_get_contents(base_path('.env'));

            // Replace the variable with the new value
            $envFile = preg_replace('/^'.$key.'=.*$/m', $key.'='.$value, $envFile);

            // Write the updated .env file
            File::put(base_path('.env'), $envFile);
        }

        return redirect()->route('dashboard.home');
    }

    public function off()
    {
        $key = 'APP_DEBUG';
        $value = 'false';

        if (File::exists(base_path('.env'))) {
            
            // Read the existing .env file
            $envFile = file_get_contents(base_path('.env'));

            // Replace the variable with the new value
            $envFile = preg_replace('/^'.$key.'=.*$/m', $key.'='.$value, $envFile);

            // Write the updated .env file
            File::put(base_path('.env'), $envFile);
        }

        return redirect()->route('dashboard.home');
    }
}
