<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = ['name','email','phone_number','loyalty_points'];
  protected $rules = [
        'name' => 'required|string|max:3',
    ];

}

class Purchase extends Model
{
  protected $fillable = ['customer_id','purchasable','price','quantity','total','date'];
  protected $rules = [
        'purchasable' => 'required|string|max:3',
    ];
}