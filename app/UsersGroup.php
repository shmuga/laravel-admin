<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersGroup extends Model {

    public function users()
    {
        return $this->hasMany('App\User','users_group_id');
    }

    public  function  funcs()
    {
        return $this->belongsToMany('App\Func');
    }

}
