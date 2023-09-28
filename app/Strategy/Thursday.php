<?php

namespace App\Strategy;
use App\Interfaces\DateInterface;

class Thursday implements DateInterface
{

    public function message(): string
    {
        return "Hoje é quinta!";
    }

}