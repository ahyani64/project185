<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primarykey = 'id';

    public $timestamps = true;

    protected $fillable = ['customer_id', 'pariwisata_id', 'status'];

    public function book(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function wisata(){
        return $this->belongsTo(Pariwisata::class, 'pariwisata_id');
    }

}
