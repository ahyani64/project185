<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $primarykey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'description'];

    public function wisata(){
        return $this->hasMany(Pariwisata::class);
    }
}
