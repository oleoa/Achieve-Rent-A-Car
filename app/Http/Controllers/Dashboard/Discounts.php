<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\Controller;
use App\Models\Discounts as DiscountsModel;
use Illuminate\Http\Request;

class Discounts extends Controller
{
    public function index()
    {
        // Get all the existing discounts
        $existing = DiscountsModel::all()->toArray();
        $this->data('discounts', $existing);

        // Load the view
        return $this->load('dashboard.discounts.list', 'discounts');
    }
  
    public function delete(Request $request)
    {
        // Get the id from the request and delete it
        $id = $request->id;
        $faq = DiscountsModel::find($id);
        $faq->delete();

        // Save the new data to the file
        $this->saver->discounts();

        // Redirect the user to the discount list
        return redirect()->route('dashboard.discount.list');
    }
  
    public function add(Request $request)
    {
        // If the request is a GET, load the view
        if($request->isMethod('GET'))
            return $this->load('dashboard.discounts.add', 'discounts');
        
        // Validate the request
        $validated = $request->validate([
            'text' => 'required',
            'texto' => 'required',
            'color' => 'required',
            'text_color' => 'required'
        ]);

        // Create a new discount
        $discount = new DiscountsModel;
        $discount->text = $request->text;
        $discount->texto = $request->texto;
        $discount->color = $request->color;
        $discount->text_color = $request->text_color;
        $discount->save();
        
        // Save the new data to the file
        $this->saver->discounts();

        // Redirect the user to the discount list
        return redirect()->route('dashboard.discount.list');
    }
  
    public function enable(Request $request)
    {
        // Disable all the discounts
        $everythingDisabled = DiscountsModel::where('active', true)->get();
        foreach ($everythingDisabled as $disabled) {
            $disabled->active = false;
            $disabled->save();
        }
    
        // Enable the discount selected
        $id = $request->id;        
        $discount = DiscountsModel::find($id);        
        $discount->active = true;
        $discount->save();

        // Save the new data to the file
        $this->saver->discounts();

        // Redirect the user to the discount list
        return redirect()->route('dashboard.discount.list');
    }
  
    public function disable(Request $request)
    {
        // Disable the discount selected
        $id = $request->id;
        $discount = DiscountsModel::find($id);
        $discount->active = false;
        $discount->save();

        // Save the new data to the file
        $this->saver->discounts();

        // Redirect the user to the discount list
        return redirect()->route('dashboard.discount.list');
    }
}
