<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProducts extends Model
{
    use HasFactory;

    protected $fillable=[
    
    'productsId',
    'subProductImage',
    'subProductName',
    'subProductQuantity',
    'subProductDesc',
    'subProductPrice',
    ];

    public function products(){
    	return $this->belongsTo(Products::class,'productsId','id');
    }
    
   
}
