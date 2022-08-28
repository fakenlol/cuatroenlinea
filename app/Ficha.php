<?php

namespace App;

interface InterfazFicha {
    public function saberColor() : string;
}

class Ficha implements InterfazFicha {

    protected $color;

    public function _construct($colorNuevo) {
        $this->color = $colorNuevo;
    }

    public function saberColor() : string {
        return $this->color;
    }
}