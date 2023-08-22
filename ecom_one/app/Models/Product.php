<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ShipingCart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category_rlt(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}