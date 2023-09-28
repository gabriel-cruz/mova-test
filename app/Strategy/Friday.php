<?php

namespace App\Strategy;
use App\Interfaces\DateInterface;

class Friday implements DateInterface
{

    public function message():string
    {
        return "Hoje é sexta!";
    }

}