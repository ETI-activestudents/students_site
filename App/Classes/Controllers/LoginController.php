<?php

namespace App\Classes\Controllers;
use App\Classes\Rendering\Rendering;

class LoginController{
    public function index():void{
        $body = new Rendering('login.php', []);
        echo $body->render();
    }
}