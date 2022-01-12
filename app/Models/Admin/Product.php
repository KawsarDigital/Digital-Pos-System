<?php

namespace App\Models\Admin;

use App\Models\Admin\Brand;
use App\Models\Admin\Group;
use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'category_id',
        'brand_id',
        'name',
        'code',
        'cost',
        'price',
        'product_tax',
        'alert_qty',
        'details',
        'qty',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function group(){
        return $this->belongsTo(Group::class,'type_id','id');
    }

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}

