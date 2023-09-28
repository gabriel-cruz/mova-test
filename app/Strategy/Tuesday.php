<?php

namespace App\Strategy;
use App\Interfaces\DateInterface;

class Tuesday implements DateInterface
{

    public function message(): string
    {
        return "Hoje é terça!";
    }

}