<?php
    include_once 'Conta.class.php';

    $conta1 = new conta();
    

    $conta1->Nome = "fulaninho de tal";
    $conta1->Cpf = "890.908.089-00";
    //$conta1->Saldo = 500;
    
    $conta1-> ConsultSaldo();
    echo"<hr>";

    echo $conta1->Depositar(250);
    echo"<hr>";

    echo $conta1->Sacar(800);
    echo"<hr>";
?>