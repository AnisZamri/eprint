<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProducts extends Model
{
    use HasFactory;

    protected $fillable=[
    
    'productsId',
    'subProductSticker',
    'subProductBanner',
    'subProductBanting',
    ];

    public function product(){
        return $this->belongsTo(Products::class,'productsId','id');
    }
}
