<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table="images";
    protected $fillable=['url','imageable_id', 'imageable_type',];

    /********relacion polimorfica*********/
    public function imageable()
    {
        return $this->morphTo();
    }
}
