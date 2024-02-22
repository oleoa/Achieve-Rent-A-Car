<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

// Controller for translations and pages
class Pages extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page')??'home';
        $language = $request->input('language')??'en';

        $translations = array();
        $translations['en'] = json_decode(File::get(base_path('resources/lang/en.json')));
        $translations['pt'] = json_decode(File::get(base_path('resources/lang/pt.json')));

        $pages = array(
            'home' => 'Home',
            'about' => 'About',
            'fleet' => 'Fleet',
            'seats' => 'Seats',
            'faq' => 'FAQ',
            'contact' => 'Contact'
        );

        $this->data('page', $page);
        $this->data('language', $language);
        $this->data('translations', $translations);

        return $this->load('dashboard.pages.index', 'pages');
    }
}
