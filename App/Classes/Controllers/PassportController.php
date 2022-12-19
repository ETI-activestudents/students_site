<?php

namespace App\Classes\Controllers;
use App\Classes\Rendering\Rendering;

class PassportController{
    public function index():void{
        $body = new Rendering('passport.php', []);
        echo $body->render();
    }
}