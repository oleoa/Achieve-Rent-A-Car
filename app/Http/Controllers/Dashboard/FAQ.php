<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use App\Models\FAQ as FAQModel;
use Illuminate\Http\Request;

class FAQ extends Controller
{
    public function index(Request $request)
    {
        // Get the existing FAQs
        $faqs = FAQModel::all()->toArray();
        $this->data('faqs', $faqs);

        // Get the filter language
        $language = $request->input('language')??'en';
        $this->data('language', $language);

        // Load the view
        return $this->load('dashboard.faq.list', 'faq');
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
        return redirect()->route('dashboard.faq.list');
    }
  
    public function add(Request $request)
    {
        if($request->isMethod('get'))
        {
            return $this->load('dashboard.faq.add', 'faq');
        }
        elseif($request->isMethod('post'))
        {
            // Validate the request
            $request->validate([
                'question' => 'required',
                'answer' => 'required',
                'pergunta' => 'required',
                'resposta' => 'required'
            ]);
    
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
            return redirect()->route('dashboard.faq.list');
        }        
    }
}
