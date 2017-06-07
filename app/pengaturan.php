<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaturan extends Model
{
    protected $table ='pengaturan';
    protected $fillable =['nama','alamatsitus','email'];
    protected $visible =['nama','alamatsitus','email'];
    public $timestamps =true;

}
