<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primarykey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'phone', 'address'];

    public function book(){
        return $this->hasMany(Booking::class);
    }
}
