<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Func extends Model {

    public function module()
    {
        return $this->belongsTo('App\Module','id');
    }

}
