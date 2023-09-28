<?php

namespace App\Contexts;
use App\Interfaces\DateInterface;

class DateContext {
    private DateInterface $date;

    public function __construct(DateInterface $date){
        $this->date = $date;
    }

    public function showMessage(){
        return $this->date->message();
    }
}