<?php
    include_once 'Retangulo.class.php';00000
    $retangulo = new Retangulo();
    $retangulo->setLargura(5);
    $retangulo->setAltura(3);
    echo "Área: " . $retangulo->calcularArea() . "\n";
    echo "Perímetro: " . $retangulo->calcularPerimetro() . "\n";
?>