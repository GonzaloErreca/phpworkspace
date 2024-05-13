<?php
class Transporte
{
    protected $modelo;
    protected $color = "negro";

    function setModelo($nombre) {
        $this->modelo = $nombre;
    }

    function saludar()
    {
        echo "El modelo es ".$this->modelo; 
    }

    function getColor() {

        return $this->color;
    }
}