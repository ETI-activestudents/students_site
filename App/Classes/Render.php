<?php

namespace App\Classes;

interface Render
{
    public function render(): bool|string;
}