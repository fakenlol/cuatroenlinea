<?php

namespace cuatroenlinea;

interface InterfazFicha {
    public function saberColor() : string;
}

class Ficha implements InterfazFicha {

    public $color;

    public function __construct(string $colorNuevo) {
        $this->color = $colorNuevo;
    }

    public function saberColor() : string {
        return $this->color;
    }
}