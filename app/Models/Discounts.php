<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
  use HasFactory;

  protected $table = 'discounts';

  protected $fillable = [
    'id',
    'text',
    'color',
    'text_color',
    'active'
  ];
}
