<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('greeting')->with([
            'name'=>"Francis",
            'names'=>[
                'Francis',
                'Joseph',
                'Anderson'
            ],
            'num_users'=>200
        ]);
    }
}
