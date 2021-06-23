<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midsemester extends Model
{
    protected $table = 'midsemesters';
    protected $primarykey = 'id_185';

    public $timestamps = false;
    protected $fillable = ['kolom_nim', 'kolom_nama', 'kolom_umur', 'kolom_alamat'];
}
