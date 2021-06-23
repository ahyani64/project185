<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $PrimaryKey = 'id';

    protected $fillable = ['name', 'description'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

}
