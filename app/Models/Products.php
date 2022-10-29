<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'user_id',
        'productName',
        'productType',
        'productDesc',
        'productPrice',
    ];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
