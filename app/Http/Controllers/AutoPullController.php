<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoPullController extends Controller
{


    public function pullDevelop(){
        exec("cd ~/am2018bali.go.id && ls -la && git pull origin develop && composer dumpautoload", $output);


        return \Html::ul($output);
    }
}
