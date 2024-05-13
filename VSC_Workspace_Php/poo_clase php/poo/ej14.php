<?php
    require_once('Auto.php');

    $a = new Auto();
    $a->setModelo("Fiat");
    $a->saludar();
    echo("\n");
    //echo ("El color es:".$a->getColor());
    $a->mensajeLindo();
    echo("\n");