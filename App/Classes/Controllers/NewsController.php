<?php

namespace App\Classes\Controllers;
use App\Classes\Rendering\Rendering;

class NewsController{
    public function index():void{
        $body = new Rendering('news.php', []);
        echo $body->render();
    }

    public function single(int $id):void{
        $body = new Rendering('single.php', ['id' => $id]);
        echo $body->render();
    }
}