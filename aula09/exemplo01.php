<?php
    include_once 'Pessoa.class.php';

    // Instanciar um objeto (nova pessoa!!!)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    // Atribuir alguns valores
    $pessoa1->Nome = 'sansungo';
    $pessoa1->Peso = 75;
    $pessoa1->Altura = 1.90;

    $pessoa2->Nome = 'kleberianus';
    $pessoa2->Peso = 69;
    $pessoa2->Altura = 1.75;


    // Chamando um método da clase pessoa 
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();


?>