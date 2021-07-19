<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    protected $table = 'pariwisatas';
    protected $primarykey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'location', 'price', 'description', 'kategori_id'];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}