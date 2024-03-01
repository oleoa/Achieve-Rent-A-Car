<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use App\Models\Views as ViewsModel;
use Illuminate\Http\Request;
use App\Helpers\ViewsCounter;

class Views extends Controller
{
    public function index(Request $request)
    {
        // Get the views and the range
        $views = ViewsModel::all()->toArray();
        $range = $request->input('range')??'all'; // today, week, month, year or all
        $language = $request->input('language')??'all'; // en, pt or all
        $device = $request->input('device')??'all'; // 0 for desktop, 1 for mobile and all for both

        // Calculate the views
        $counter = new ViewsCounter($views, $range, $language, $device);
        $data = $counter->get();

        // Inform the view about the filters
        $this->data('filters', array(
            'range' => $range,
            'language' => $language,
            'device' => $device
        ));
        
        // Pass the data
        $this->data('views', $data);

        // Set the current page and load the view
        return $this->load('dashboard.views', 'views');
    }

    public function delete()
    {
        // Delete all the views
        ViewsModel::truncate();

        // Redirect the user to the views list
        return redirect()->route('dashboard.views');
    }
}
