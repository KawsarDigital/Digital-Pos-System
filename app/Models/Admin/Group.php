<?php

namespace App\Models\Admin;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'status',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }

}
