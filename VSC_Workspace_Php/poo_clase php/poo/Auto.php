<?php
    require_once("Transporte.php");

    class Auto extends Transporte {

        function mensajeLindo() {
            echo "El color es ".$this->color."\n";
        }
    }