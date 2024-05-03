<?php

class Operaciones {
    public function sumar($a, $b) {
        if($a==null || $b==null){
             throw new InvalidArgumentException("No pueden existir nulos");
        }
        return $a + $b;
    }
}




