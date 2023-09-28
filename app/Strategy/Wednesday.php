<?php

namespace App\Strategy;
use App\Interfaces\DateInterface;

class Wednesday implements DateInterface
{

    public function message(): string{
        return "Hoje é quarta!";
    }

}