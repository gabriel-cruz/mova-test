<?php

namespace App\Strategy;
use App\Interfaces\DateInterface;

class Monday implements DateInterface
{

    public function message():string
    {
        return "Hoje é segunda!";
    }

}