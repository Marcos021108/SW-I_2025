<?php
    include_once 'Funcionario.class.php';
    $funcionario1 = new Funcionario("Carlos", 3000);
    $funcionario1->aplicarAumento(10);
    echo $funcionario1->mostrarDados();
?>