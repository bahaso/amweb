<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class MapsController extends BaseController
{
    //

    public function index()
    {
        return $this->output( 'maps.index' );
    }
}
