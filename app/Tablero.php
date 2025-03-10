<?php

namespace app;

class Tablero {

    //VACIAR EL ARRAY CUANDO PASEMOS A EDITARLO DE FORMA FINAL
    public $fichas = array(
        array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
        array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
        array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
        array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
        array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
        array("🌚","🌚","🌚","🌚","🌚","🌚","🌚")
    );

    public $ficha;

    public function _construct(){
        $this->reinicio();
    }

    public function devolverTablero(){
        return $this->fichas;
    }

    public function verTablero() {
        for ($i=5; $i >= 0; $i--) { 
            for ($j=0; $j <= 6; $j++) { 
                echo $this->fichas[$i][$j];
            }
            echo "\n";
        }
        return $this->fichas;
    }

    public function arrojar(int $col,string $color) {
        $this->ficha = new Ficha($color);
        
        for ($i=0; $i <= 5; $i++) { 
            for ($j=0; $j <= 6; $j++) {
                if ($this->fichas[$i][$j] == "🌚" && $j == $col-1) {//MODIFICAR CUANDO PASEMOS A WEB. CAMBIAR 🌚 POR ""
                    $this->fichas[$i][$j] = $color;
                    return 0;
                }
            }
        }
    }

    public function reinicio() {
        return $this->fichas = array();
    }
}