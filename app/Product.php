<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primarykey = 'id';

    //jika tidak mau memasukkan timestamp
    public $timestamps = true;

    protected $fillable = ['name', 'description', 'price', 'category_id'];
    //

    public function jenis()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
