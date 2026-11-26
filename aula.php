<?php

$chute = (int) readline("digite um numero: ");

if ($chute == 42){
    print("você venceu!");
} else {
    if ($chute > 42){
        print("chute muito alto");
    } else {
        print("chute muito baixo");
    }
}

?>