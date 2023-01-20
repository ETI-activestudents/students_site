<?php

namespace App\Classes\Routing;

use Exception;

class Router{
    private array $routes = [];

    public function addRoute(Route $route): void{
        $this->routes[] = $route;
    }

    /**
     * @throws Exception
     */
    public function getMatchRoute(string $path): MatchedRoute{
        if($this->checkPath(substr($path,1)) === true){
            throw new Exception('Access denied :(', 403);
        }else{
            foreach ($this->routes as $route) {
                $matchedRoute = $route->match($path);
                if (!is_null($matchedRoute)) {
                    return $matchedRoute;
                }
            }
        }
        throw new Exception('Page not found', 404);
    }

    public function checkPath(string $path): bool{
        if (is_dir($path) && file_exists($path)) return true;
        return false;
    }
}