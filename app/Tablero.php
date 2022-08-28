<?php

namespace App;

class Tablero {

    public $fichas = array();

    public function _construct {
        reinicio();
    }

    public function verTablero() {
        return $this->fichas;
    }

    public function arrojar(int $fil, int $col,string $color) {
        $ficha = new Ficha($color);
        array_push($this->fichas,($fil,$col,$ficha));
    }

    public function reinicio() {
        $this->fichas = array();
    }
}