<?php

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = ['name','email','phone'];
}

class Purchase extends Model
{
  protected $fillable = ['customer_email','purchasable','price','quantity','total','date'];
}
