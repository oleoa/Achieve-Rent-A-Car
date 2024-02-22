<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use Illuminate\Http\Request;

// Controller for translations and pages
class Pages extends Controller
{
    public function index()
    {
        return $this->load('dashboard.pages.index', 'pages');
    }
}
