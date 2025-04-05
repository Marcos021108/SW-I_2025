<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
    <style>
    table {
      border-collapse: collapse;
      width: 70%;
    }
    th, td {
      border: 1px solid black;
      padding: 10px;
    }
    .Eletrônicos { background-color: #e0f7fa; }
    .Alimentos { background-color: #f1f8e9; }
    .Roupas { background-color: #fce4ec; }
  </style>
</head>
<body>

<?php
$produtos = [
    ["Nome" => "Smartphone", "Preço" => 1500, "Categoria" => "Eletrônicos"],
    ["Nome" => "Camiseta", "Preço" => 50, "Categoria" => "Roupas"],
    ["Nome" => "Arroz", "Preço" => 20, "Categoria" => "Alimentos"],
    ["Nome" => "Notebook", "Preço" => 3500, "Categoria" => "Eletrônicos"],
];

echo "<table>";
echo "<tr><th>Nome</th><th>Preço</th><th>Categoria</th></tr>";

foreach ($produtos as $p) {
    $cat = $p["Categoria"];
    echo "<tr class='{$cat}'>";
    echo "<td>{$p['Nome']}</td><td>R$ {$p['Preço']}</td><td>{$p['Categoria']}</td>";
    echo "</tr>";
}

echo "</table>";
?>
    
</body>
</html>