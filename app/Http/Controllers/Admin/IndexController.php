<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

    public function index(){
        echo 'index';
    }

    public function login(){
        echo 'login';
    }

}
