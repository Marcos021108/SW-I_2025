<?php
    include_once 'Aluno.class.php';

    $fulano = new aluno("fulaninho", 500, 750);

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();

    $media = $fulano->Media($nota1,$nota2);

    echo "ALUNO: " . $fulano->getNome() . "<br>";
    echo "MÉDIA: " . $fulano->Media($nota1,$nota2) . "<br>";
    echo "SITUAÇÃO: " . $fulano->VerificarSituacao($media) . "<hr>";
?>