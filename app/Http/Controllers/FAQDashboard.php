<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ as FAQModel;

class FAQDashboard extends Controller
{
    public function index()
    {
      $existing = FAQModel::all()->toArray();
      $this->data('faqs', $existing);
      $this->current('faq');
      return $this->load('dashboard.faq');
    }
  
    public function delete(Request $request)
    {
      $id = $request->id;
      $faq = FAQModel::find($id);
      $faq->delete();
      return redirect()->route('faq.list');
    }
  
    public function add(Request $request)
    {
      $answer = $request->answer;
      $answer = str_replace("\r\n", "<br>", $answer);
  
      $resposta = $request->resposta;
      $resposta = str_replace("\r\n", "<br>", $resposta);
  
      $faq = new FAQModel;
      $faq->question = $request->question;
      $faq->pergunta = $request->pergunta;
      $faq->answer = $answer;
      $faq->resposta = $resposta;
      $faq->save();
      return redirect()->route('faq.list');
    }
}
