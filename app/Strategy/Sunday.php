<?php

namespace App\Strategy;
use App\Interfaces\DateInterface;

class Sunday implements DateInterface
{

    public function message(): string
    {
        return "Hoje é domingo!";
    }

}