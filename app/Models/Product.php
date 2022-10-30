<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //tabel apa saja yang boleh diizinkan
    //protected $fillable = ['name','description','price','image_url'];

    //atau
    //tabel yang dilindungi, selain itu fillabel
    protected $guarded = ['id'];

}