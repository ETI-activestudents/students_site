<?php

namespace App\Classes\Routing;

class MatchedRoute
{
    public function __construct(
        public string $controller,
        public string $action,
        public array $params
    )
    {

    }
}