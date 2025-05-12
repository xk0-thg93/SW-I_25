<?php
    include_once 'conta.class.php';

    $conta1 = new conta();

    $conta1->Nome = "Fulaninho da Silva";
    $conta1->Cpf = "999.999.999-99";

    $conta1->MostrarDados();

    echo $conta1->Depositar(500);

    echo "<br>";

    $conta1->MostrarDados();

    echo "<br>";

    echo $conta1->Sacar(500);
?>