<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $fillable = ['customer_id','purchasable','price','quantity','total','purchase_date','purchase_date_string'];
}