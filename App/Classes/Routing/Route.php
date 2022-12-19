<?php

namespace App\Classes\Routing;

class Route
{
    public function __construct(public string $pattern,
                                public string $controller,
                                public string $action ){

    }

    public function match(string $path): ?MatchedRoute
    {
        if(is_null($parts = $this->fnCompareParts($path, $this->pattern))){
            return null;
        }
        $params = [];
        for($i = 0; $i < count($parts[0]); $i++){
            if(str_starts_with($parts[1][$i], ':')){
                $params[substr($parts[1][$i], 1)] = $parts[0][$i];
            }else if ( $parts[1][$i] !== $parts[0][$i] ){
                return null;
            }
        }
        return new MatchedRoute($this->controller, $this->action, $params);
    }

    public function fnCompareParts(string $path, string $pattern): ?array{
        $urlParts = array_values(array_filter(explode('/', $path)));
        $patternParts = array_values(array_filter(explode('/', $pattern)));
        if(count($urlParts) !== count($patternParts)){
            return null;
        }else {
            return [$urlParts, $patternParts];
        }
    }
}