<?php

namespace App\Strategy;
use App\Interfaces\DateInterface;

class Birthday implements DateInterface
{

    public function message():string
    {
        return "Hoje é seu aniversáio!";
    }
}