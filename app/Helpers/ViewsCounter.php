<?php

namespace App\Helpers;

use Carbon\Carbon;

class ViewsCounter
{
    private $views;
    private $filters;

    // Get's all the views and filters
    public function __construct($views, $range, $language, $device)
    {
        // Carbonize the views for easy date manipulation
        $this->views = $this->carbonize($views);

        // Set the filters
        $this->filters = array(
            'range' => $range,
            'language' => $language,
            'device' => $device
        );
    }

    // Returns all the data treated
    public function get()
    {
        $data = array();

        // Filter the views
        foreach($this->views as $view)
            if($this->filter($view))
                array_push($data, $view);

        // Organize it by page
        $data = $this->organize($data);

        // Give it usable information
        $data = $this->usable($data);

        return $data;
    }

    // Give the data usable information
    private function usable($views)
    {
        $usable = array('total', 'percentage');
        
        foreach($views as $key => $value)
        {
            if($key == 'total' || $key == 'percentage')
                continue;
            $total = count($value);
            $percentage = number_format(($total / $views['total'] * 100), 3);
            $views[$key] = array(
                'total' => $total,
                'percentage' => $percentage,
                'views' => $value
            );
        }

        return $views;
    }

    // Organize the views by page
    private function organize($views)
    {
        $count = 0;

        $pages = array(
            'home' => array(),
            'fleet' => array(),
            'about' => array(),
            'seats' => array(),
            'faq' => array(),
            'contact' => array()
        );
        
        foreach($pages as $key => $value)
            foreach($views as $view)
                if($view['page'] == $key){
                    array_push($pages[$key], $view);
                    $count++;
                }

        $pages['total'] = $count;
        if(count($this->views) == 0)
          $pages['percentage'] = 0;
        else if(count($this->views) == $count)
          $pages['percentage'] = 100;
        else if(count($this->views) > 0)
          $pages['percentage'] = number_format(($pages['total'] / count($this->views) * 100), 3);

        return $pages;
    }

    // Carbonize the views
    private function carbonize($views)
    {
        foreach($views as $key => $value)
            $views[$key]['when'] = Carbon::parse($value['created_at']);
        return $views;
    }

    // Filter the views trhu all the filters
    private function filter($view)
    {
        $currentRange = $this->filterRange($view);
        $currentLanguage = $this->filterLanguage($view);
        $currentDevice = $this->filterDevice($view);
        if($currentRange && $currentLanguage && $currentDevice)
            return true;
        return false;
    }

    // Filter the views by range
    private function filterRange($view)
    {
        $range = $this->filters['range'];
        if($range == 'today')
        {
            if(!$view['when']->isToday())
                return false;
        }
        else if($range == 'week')
        {
            if(!$view['when']->isCurrentWeek())
                return false;
        }
        else if($range == 'month')
        {
            if(!$view['when']->isCurrentMonth())
                return false;
        }
        else if($range == 'year')
        {
            if(!$view['when']->isCurrentYear())
                return false;
        }
        else if($range == 'all')
        {
            return true;
        }
        return true;
    }

    // Filter the views by language
    private function filterLanguage($view)
    {
        $language = $this->filters['language'];
        if($language != 'all' && $view['locale'] != $language)
            return false;
        return true;
    }

    // Filter the views by device
    private function filterDevice($view)
    {
        $device = $this->filters['device'];
        
        if($device != 'all' && $device != $view['mobile'])
            return false;
        return true;
    }
}
