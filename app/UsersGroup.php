<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersGroup extends Model {

	protected $table = 'users_groups';

    public function users(){
        return $this->hasMany('App\User');
    }

}
