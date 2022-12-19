<?php

namespace App\Classes\Controllers;
use App\Classes\Rendering\Rendering;

class ErrorController
{
    public function message(array $errorInfo):void{
        $body = new Rendering('errors'.DIRECTORY_SEPARATOR.'404.php',['message' => $errorInfo['message'], 'code' => $errorInfo['code']]);
        echo $body->render();
    }
}