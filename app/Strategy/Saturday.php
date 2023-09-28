<?php

namespace App\Strategy;
use App\Interfaces\DateInterface;

class Saturday implements DateInterface
{

    public function message(): string
    {
        return "Hoje é sábado!";
    }

}