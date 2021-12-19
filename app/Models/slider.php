<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    protected $table = 'slider';
    protected $fillable = [
        'categori1',	'categori2',	'judul',	'link',	'image'
    ];
}
