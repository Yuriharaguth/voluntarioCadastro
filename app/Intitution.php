<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intitution extends Model
{
    protected $fillable = ['name', 'address', 'city'];

    public function volunteers() {
        return $this->hasMany('App\Volunteer');
    }

 /*
    hasOne         possui um
    hasMany        possui varios
    belongsTo      pertence a 
    belongsToMany  pertence a muitos

*/
}
