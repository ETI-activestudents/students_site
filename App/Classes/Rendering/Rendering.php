<?php

namespace App\Classes\Rendering;
use App\Classes\Render;

class Rendering implements Render{

    public function __construct(
        protected string $component,
        protected array $data){
    }

    public function render(): bool|string{
        extract($this->data);
        ob_start();
        include($GLOBALS['root'].'/pages/'.$this->component);
        return ob_get_clean();
    }
}