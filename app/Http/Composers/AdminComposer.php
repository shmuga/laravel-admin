<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class AdminComposer {

    public function compose(View $view)
    {
        $data = $view->value;

        $view->with('lol', $data*5);
    }

}