<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class InputController extends BaseController
{

    public function dynamic(Request $request)
    {
        if($request->submit){
            var_dump($request->input);
        } else {
            return view('input.dynamic', [
            ]);
        }
    }
}
