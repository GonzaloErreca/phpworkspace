<?php
    $a = 123;

    function test() {
        GLOBAL $a;

        if (is_null($a)) {
            echo "La variables es nula";
        } else {
            echo "Tiene contenido $a";
        }
        echo("\n");
    }

    test();