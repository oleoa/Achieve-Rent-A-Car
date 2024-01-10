<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Views;
use App\Models\FAQ;

class API extends Controller
{
  private String $key;

  public function __construct()
  {
    $this->key = env('API_KEY');
  }

  private function validateKey(Request $request)
  {
    return $request->key??null === $this->key;
  }

  public function views(Request $request)
  {
    if(!$this->validateKey($request)) return ['success' => false, 'message' => 'Invalid API key'];
    
    return Views::all()->toArray();
  }

  public function faq(Request $request)
  {
    if(!$this->validateKey($request)) return ['success' => false, 'message' => 'Invalid API key'];
    
    return FAQ::all()->toArray();
  }

  public function storeFAQ(Request $request)
  {
    if(!$this->validateKey($request)) return ['success' => false, 'message' => 'Invalid API key'];

    $faq = new FAQ;
    $faq->question = $request->question;
    $faq->answer = $request->answer;
    $faq->save();
    return ['success' => true, 'message' => 'FAQ added successfully'];
  }

  public function deleteFAQ(Request $request)
  {
    if(!$this->validateKey($request)) return ['success' => false, 'message' => 'Invalid API key'];

    $id = $request->id;
    $faq = FAQ::find($id);
    $faq->delete();
    return ['success' => true, 'message' => 'FAQ deleted successfully'];
  }
}
