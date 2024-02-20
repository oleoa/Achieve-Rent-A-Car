<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use App\Models\FAQ as FAQModel;
use Illuminate\Http\Request;

class FAQ extends Controller
{
    public function index()
    {
        // Get the existing FAQs
        $existing = FAQModel::all()->toArray();
        $this->data('faqs', $existing);
        $this->current('faq');

        // Load the view
        return $this->load('dashboard.faq');
    }
  
    public function delete(Request $request)
    {
        // Search for the FAQ by its ID and delete it
        $id = $request->id;
        $faq = FAQModel::find($id);
        $faq->delete();
        
        // Save the new data to the file
        $this->saver->faq();

        // Redirect the user to the FAQ list
        return redirect()->route('faq.list');
    }
  
    public function add(Request $request)
    {
        // Replace the line breaks with <br> tags
        $answer = $request->answer;
        $answer = str_replace("\r\n", "<br>", $answer);
    
        // Replace the line breaks with <br> tags
        $resposta = $request->resposta;
        $resposta = str_replace("\r\n", "<br>", $resposta);
    
        // Create a new FAQ
        $faq = new FAQModel;
        $faq->question = $request->question;
        $faq->pergunta = $request->pergunta;
        $faq->answer = $answer;
        $faq->resposta = $resposta;
        $faq->save();

        // Save the new data to the file
        $this->saver->faq();

        // Redirect the user to the FAQ list
        return redirect()->route('faq.list');
    }
}
