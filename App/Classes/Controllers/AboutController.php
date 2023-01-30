<?php

namespace App\Classes\Controllers;
use App\Classes\Rendering\Rendering;

class AboutController{
    public function index():void{
        $body = new Rendering('about.php', []);
        echo $body->render();
    }
}