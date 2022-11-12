<?php

namespace app;
include "Tablero.php";

//$juego = new Juego("Hernan","Claudio");
class Juego {
    
    public $jugador1,$jugador2;
    public $tablero;
    public $fichas_vacias = 42;
    public $actual_pos;

    public function __construct(string $j1,string $j2){
        $this->jugador1 = $j1;
        $this->jugador2 = $j2;
        $this->turnos();
    }

    public function turnos(){
        $this->tablero = new Tablero();

        $this->tablero->verTablero();
        while ($this->fichas_vacias != 0) {
            if($this->turno($this->jugador1,"🌕") || $this->turno($this->jugador2,"🌎")){
                return 0;
            }
        }
        //VERIFICAR SI LUEGO ESTO HABRIA QUE SACARLO O RETORNAR EL TEXTO PARA ALGUN POPUP
        ($this->fichas_vacias == 0) ? print "Se han quedado sin turnos.\n" :"";
    }

    public function turno($jugador,$color){
        $this->fichas_vacias--;
        $this->actual_pos = (int)readline("Turno de " . $jugador . ": \n");
        $this->tablero->arrojar($this->actual_pos,$color);
        $this->tablero->verTablero();
        if($this->winCheck($this->tablero->devolverTablero(),$color)){
            print "Gano jugador " . $color . "\n";
            return 1;
        };
    }

    public function winCheck($tablero,$color){
        $suma_fichas = 0;

        for ($i=0; $i <= 5; $i++) { 
            for ($j=0; $j <= 6; $j++) {
                if ($tablero[$i][$j] == $color) {
                    $suma_fichas ++;
                }
                if($suma_fichas == 4){
                    $this->win = 1;
                    return 1;
                }
                if($tablero[$i][$j] != $color && $tablero[$i][$j] != "🌚") {
                     $suma_fichas = 0;
                }
            }
            $suma_fichas = 0;
        }

        $suma_fichas = 0;
        for ($i=0; $i <= 6; $i++) { 
            for ($j=0; $j <= 5; $j++) {
                if ($tablero[$j][$i] == $color) {
                    $suma_fichas ++;
                }
                if($suma_fichas == 4){
                    $this->win = 1;
                    return 1;
                }
                if($tablero[$j][$i] != $color && $tablero[$j][$i] != "🌚") {
                     $suma_fichas = 0;
                }
            }
            $suma_fichas = 0;
        }
        echo "\n";
        //RECORRE LAS FILAS
        for ($i=0; $i <= 5; $i++) {
            //RECORRE LAS COLUMNAS
            for ($j=0; $j <= 6; $j++){
                if($i < 3 && $j <= 3 && 
                $tablero[$i][$j] == $color && 
                $tablero[$i+1][$j+1] == $color && 
                $tablero[$i+2][$j+2] == $color && 
                $tablero[$i+3][$j+3] == $color){
                    $this->win = 1;
                    return 1;
                }
                if($i < 3 && $j <= 3 && 
                $tablero[$i][6-$j] == $color && 
                $tablero[$i+1][5-$j] == $color && 
                $tablero[$i+2][4-$j] == $color && 
                $tablero[$i+3][3-$j] == $color){
                    $this->win = 1;
                    return 1;
                }
            }
        }
        return 0;
    }
}