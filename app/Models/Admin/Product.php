<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";
    protected $fillable=['name','price','stock'];

    /********relacion polimorfica*********/
    public function images()
    {
        return $this->morphMany(Images::class, "imageable");
    }
}
