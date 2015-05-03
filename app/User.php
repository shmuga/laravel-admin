<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

    public function group()
    {
        return $this->belongsTo('App\UsersGroup','id');
    }

}
