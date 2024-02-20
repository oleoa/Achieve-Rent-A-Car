<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Views as ViewsModel;

class Views extends Controller
{  
    private string $range;

    private function calculateViews($views)
    {
        // Data that will be returned
        $data = array();

        // Filter the views by range
        if($this->range == 'day')
        {
            $today = Carbon::now()->toDateString();

            $filteredData = array_filter($views, function ($item) use ($today) {
                $itemDate = Carbon::parse($item['created_at'])->toDateString();
                return $itemDate === $today;
            });

            $views = array_values($filteredData);
        }
        elseif($this->range == 'week')
        {
            $today = Carbon::now()->toDateString();
            $weekAgo = Carbon::now()->subWeek()->toDateString();

            $filteredData = array_filter($views, function ($item) use ($today, $weekAgo) {
                $itemDate = Carbon::parse($item['created_at'])->toDateString();
                return $itemDate >= $weekAgo && $itemDate <= $today;
            });

            $views = array_values($filteredData);
        }
        elseif($this->range == 'month')
        {
            $today = Carbon::now()->toDateString();
            $monthAgo = Carbon::now()->subMonth()->toDateString();

            $filteredData = array_filter($views, function ($item) use ($today, $monthAgo) {
                $itemDate = Carbon::parse($item['created_at'])->toDateString();
                return $itemDate >= $monthAgo && $itemDate <= $today;
            });

            $views = array_values($filteredData);
        }
        elseif($this->range == 'quarter')
        {
            $today = Carbon::now()->toDateString();
            $quarterAgo = Carbon::now()->subQuarter()->toDateString();

            $filteredData = array_filter($views, function ($item) use ($today, $quarterAgo) {
                $itemDate = Carbon::parse($item['created_at'])->toDateString();
                return $itemDate >= $quarterAgo && $itemDate <= $today;
            });

            $views = array_values($filteredData);
        }
        elseif($this->range == 'year')
        {
            $today = Carbon::now()->toDateString();
            $yearAgo = Carbon::now()->subYear()->toDateString();

            $filteredData = array_filter($views, function ($item) use ($today, $yearAgo) {
                $itemDate = Carbon::parse($item['created_at'])->toDateString();
                return $itemDate >= $yearAgo && $itemDate <= $today;
            });
            
            $views = array_values($filteredData);
        }

        $data['views'] = $views;
        $data['views']['total'] = $views;
        $data['views']['desktop'] = array_filter($views, function ($view) { return $view['mobile'] === 0; });
        $data['views']['mobile'] = array_filter($views, function ($view) { return $view['mobile'] === 1; });
        $data['views']['home'] = array_filter($views, function ($view) { return $view['page'] === 'home'; });
        $data['views']['about'] = array_filter($views, function ($view) { return $view['page'] === 'about'; });
        $data['views']['faq'] = array_filter($views, function ($view) { return $view['page'] === 'faq'; });
        $data['views']['contact'] = array_filter($views, function ($view) { return $view['page'] === 'contact'; });

        $data['total'] = array();
        $data['total']['total'] = count($views);
        $data['total']['desktop'] = count(array_filter($views, function ($view) { return $view['mobile'] === 0; }));
        $data['total']['mobile'] = count(array_filter($views, function ($view) { return $view['mobile'] === 1; }));
        $data['total']['home'] = count(array_filter($views, function ($view) { return $view['page'] === 'home'; }));
        $data['total']['about'] = count(array_filter($views, function ($view) { return $view['page'] === 'about'; }));
        $data['total']['faq'] = count(array_filter($views, function ($view) { return $view['page'] === 'faq'; }));
        $data['total']['contact'] = count(array_filter($views, function ($view) { return $view['page'] === 'contact'; }));

        $data['porcentage'] = array();
        $data['porcentage']['total'] = 100;
        $data['porcentage']['desktop'] = $data['total']['total'] == 0 ? 100 : round(($data['total']['mobile'] / $data['total']['total']) * 100, 2);
        $data['porcentage']['mobile'] = $data['total']['total'] == 0 ? 100 : round(($data['total']['mobile'] / $data['total']['total']) * 100, 2);
        $data['porcentage']['home'] = $data['total']['total'] == 0 ? 100 : round(($data['total']['home'] / $data['total']['total']) * 100, 2);
        $data['porcentage']['about'] = $data['total']['total'] == 0 ? 100 : round(($data['total']['about'] / $data['total']['total']) * 100, 2);
        $data['porcentage']['faq'] = $data['total']['total'] == 0 ? 100 : round(($data['total']['faq'] / $data['total']['total']) * 100, 2);
        $data['porcentage']['contact'] = $data['total']['total'] == 0 ? 100 : round(($data['total']['contact'] / $data['total']['total']) * 100, 2);

        $data['locale'] = array();
        $data['locale']['en'] = array();
        $data['locale']['pt'] = array();
        $data['locale']['en']['total']['count'] = count(array_filter($views, function ($view) { return $view['locale'] === 'en'; }));
        $data['locale']['pt']['total']['count'] = count(array_filter($views, function ($view) { return $view['locale'] === 'pt'; }));
        $data['locale']['en']['contact']['count'] = count(array_filter($data['views']['contact'], function ($view) { return $view['locale'] === 'en'; }));
        $data['locale']['pt']['contact']['count'] = count(array_filter($data['views']['contact'], function ($view) { return $view['locale'] === 'pt'; }));
        $data['locale']['en']['faq']['count'] = count(array_filter($data['views']['faq'], function ($view) { return $view['locale'] === 'en'; }));
        $data['locale']['pt']['faq']['count'] = count(array_filter($data['views']['faq'], function ($view) { return $view['locale'] === 'pt'; }));
        $data['locale']['en']['about']['count'] = count(array_filter($data['views']['about'], function ($view) { return $view['locale'] === 'en'; }));
        $data['locale']['pt']['about']['count'] = count(array_filter($data['views']['about'], function ($view) { return $view['locale'] === 'pt'; }));
        $data['locale']['en']['home']['count'] = count(array_filter($data['views']['home'], function ($view) { return $view['locale'] === 'en'; }));
        $data['locale']['pt']['home']['count'] = count(array_filter($data['views']['home'], function ($view) { return $view['locale'] === 'pt'; }));
        $data['locale']['en']['desktop']['count'] = count(array_filter($data['views']['desktop'], function ($view) { return $view['locale'] === 'en'; }));
        $data['locale']['pt']['desktop']['count'] = count(array_filter($data['views']['desktop'], function ($view) { return $view['locale'] === 'pt'; }));
        $data['locale']['en']['mobile']['count'] = count(array_filter($data['views']['mobile'], function ($view) { return $view['locale'] === 'en'; }));
        $data['locale']['pt']['mobile']['count'] = count(array_filter($data['views']['mobile'], function ($view) { return $view['locale'] === 'pt'; }));
        $data['locale']['en']['total']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($views, function ($view) { return $view['locale'] === 'en'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['pt']['total']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($views, function ($view) { return $view['locale'] === 'pt'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['en']['contact']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['contact'], function ($view) { return $view['locale'] === 'en'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['pt']['contact']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['contact'], function ($view) { return $view['locale'] === 'pt'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['en']['faq']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['faq'], function ($view) { return $view['locale'] === 'en'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['pt']['faq']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['faq'], function ($view) { return $view['locale'] === 'pt'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['en']['about']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['about'], function ($view) { return $view['locale'] === 'en'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['pt']['about']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['about'], function ($view) { return $view['locale'] === 'pt'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['en']['home']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['home'], function ($view) { return $view['locale'] === 'en'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['pt']['home']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['home'], function ($view) { return $view['locale'] === 'pt'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['en']['desktop']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['desktop'], function ($view) { return $view['locale'] === 'en'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['pt']['desktop']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['desktop'], function ($view) { return $view['locale'] === 'pt'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['en']['mobile']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['mobile'], function ($view) { return $view['locale'] === 'en'; })) / $data['total']['total']) * 100, 2);
        $data['locale']['pt']['mobile']['porcentage'] = $data['total']['total'] == 0 ? 100 : round((count(array_filter($data['views']['mobile'], function ($view) { return $view['locale'] === 'pt'; })) / $data['total']['total']) * 100, 2);

        return $data;
    }

    public function index(Request $request)
    {
        // Get the views and the range
        $views = ViewsModel::all()->toArray();
        $this->range = $request->input('range')??'all';

        // Calculate the views
        $data = $this->calculateViews($views);

        // Set the range for the view
        $this->data('range', $this->range);
        
        // Set the data
        $this->data('views', $data);

        // Set the current page and load the view
        return $this->load('dashboard.views', 'views');
    }

    public function delete()
    {
        // Delete all the views
        ViewsModel::truncate();

        // Redirect the user to the views list
        return redirect()->route('views');
    }
}
