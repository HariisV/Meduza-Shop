<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'nama_product',
        'harga',
        'stok',
        'photo',
        'deskripsi',
        'status',
        'dilihat',
        'terjual',
        'kategori'
    ];
    public function Cart(){
        return $this->belongsTo('App\Models\Cart'); 
    }
}
