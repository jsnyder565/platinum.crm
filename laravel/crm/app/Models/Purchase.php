<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = ['name','email','phone_number','loyalty_points'];
}

class Purchase extends Model
{
  protected $fillable = ['customer_id','purchasable','price','quantity','total','purchase_date','purchase_date_string'];
}