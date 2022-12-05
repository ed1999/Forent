<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion Uno a Muchos
    public function courses(){
        return $this->hasMany('App\Model\Course');
    }

}
