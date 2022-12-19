<?php

namespace App\Classes;

use App\Classes\Routing\Router;
use App\Classes\Controllers\ErrorController;

class Application{
    private string $path;               // то что приходит в REQUEST_URI
    private string $controller;         // контроллер который нужно загрузить
    private string $action;             // действие которое нужно загрузить


    public  function __construct(private readonly Router $router){
        $this->path = $_SERVER['REQUEST_URI'] ?? '/';
        $this->start();
    }

    public function start(): void
    {
        try{
            $matchedRoute = $this->router->getMatchRoute($this->path);
            $controller = new $matchedRoute->controller();
            $controller->{$matchedRoute->action}(...$matchedRoute->params);
        }catch (\Throwable $e){
            (new ErrorController())->message([ 'message' => $e->getMessage(), 'code' => $e->getCode()]);
        }
    }
}
