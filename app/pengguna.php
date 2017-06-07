<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
     protected $table ='pengguna';
    protected $fillable =['nama','alamat','no hp'];
    protected $visible =['nama','alamat','no hp'];
    public $timestamps =true;

}
