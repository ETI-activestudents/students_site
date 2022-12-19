<?php

namespace App\Classes\Controllers;
use App\Classes\Rendering\Rendering;

class MainController{
    public function index():void{
        $body = new Rendering('main.php', []);
        echo $body->render();
    }
}