<?php
    include_once 'Livro.class.php';
    $livro = new Livro("divergente", "Veronica Roth");
        echo $livro->exibirStatus() . "\n";
    $livro->emprestar();
        echo $livro->exibirStatus() . "\n";
    $livro->devolver();
        echo $livro->exibirStatus() . "\n";
?>