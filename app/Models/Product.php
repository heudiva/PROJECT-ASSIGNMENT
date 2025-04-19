<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id'); 
    }
    public function Supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_id', 'supplier_id');
    }
}
