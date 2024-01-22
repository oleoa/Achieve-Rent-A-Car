<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discounts as DiscountsModel;

class DiscountsDashboard extends Controller
{
    public function index()
    {
      $existing = DiscountsModel::all()->toArray();
      $this->data('discounts', $existing);
      $this->current('discounts');
      return $this->load('dashboard.discounts');
    }
  
    public function delete(Request $request)
    {
      $id = $request->id;
      $faq = DiscountsModel::find($id);
      $faq->delete();
      return redirect()->route('discount.list');
    }
  
    public function add(Request $request)
    {
      $discount = new DiscountsModel;
      $discount->text = $request->text;
      $discount->texto = $request->texto;
      $discount->color = $request->color;
      $discount->text_color = $request->text_color;
      $discount->save();
      return redirect()->route('discount.list');
    }
  
    public function enable(Request $request)
    {
      $everythingDisabled = DiscountsModel::where('active', true)->get();
      foreach ($everythingDisabled as $disabled) {
        $disabled->active = false;
        $disabled->save();
      }
  
      $id = $request->id;
    
      $discount = DiscountsModel::find($id);
      
      $discount->active = true;
      $discount->save();
      return redirect()->route('discount.list');
    }
  
    public function disable(Request $request)
    {
      $id = $request->id;
      $discount = DiscountsModel::find($id);
      $discount->active = false;
      $discount->save();
      return redirect()->route('discount.list');
    }
}
