<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

    public function index(){
        return view('admin.index');
    }

    public function login(){
        echo 'login';
    }

}
