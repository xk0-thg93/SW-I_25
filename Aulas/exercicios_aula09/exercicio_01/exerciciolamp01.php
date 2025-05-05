<?php
    include_once 'Lampada.class.php';

    $lamp1 = new Lampada();

    $lamp1->Fabricante = "OSRAM";
    $lamp1->Potencia = 110;
    $lamp1->Tensao = 50;
    $lamp1->Cor =  "Branca";

    $lamp1->Desligar();
    $lamp1->MostrarDados();
    $lamp1->MostrarLista();

    echo "<hr>";

    $lamp1->Ligar();
    $lamp1->MostrarDados();
    $lamp1->MostrarLista();

?>