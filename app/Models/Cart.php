<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'user_id','product_id','jumlah'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User'); 
    }
    public function Product(){
        return $this->belongsTo('App\Models\Product'); 
    }
}
