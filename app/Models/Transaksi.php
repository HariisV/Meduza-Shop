<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'user_id',
    	'product_id',
        'payment',
        'total',
        'nama_lengkap',
        'alamat',
        'kabupaten',
        'provinsi',
        'kode_pos',
         'nomor_hp',
    	'status',
        'catatan'
    ];  
    public function metodePembayaran()
    {
        return $this->belongsTo(metodePembayaran::class, 'payment');
    }
}
