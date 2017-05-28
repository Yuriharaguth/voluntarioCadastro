<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //apenas esses campos são aceitos pelo form
    protected $fillable = ['name', 'phone', 'email'];

    public function institution(){
        return $this->belongsTo('App\Intitution');
    }

    public function causes(){
        return $this->belongsToMany('App\Cause');
    }

//NÃO ESTA SENDO USADO MAIS
    public static $rules = [
        'name'  => 'required',
        'email' => 'required|email'
    ];
    
}
