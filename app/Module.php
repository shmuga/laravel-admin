<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model {

    public function functions()
    {
        return $this->hasMany('App\Func','module_id');
    }

}
