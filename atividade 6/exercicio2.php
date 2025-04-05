<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Tabela Dinâmica com Input do Usuário (WHILE)</h2>
    <form method="post">
      Linhas: <input type="number" name="linhas" required>
      Colunas: <input type="number" name="colunas" required>
      <input type="submit" value="Gerar Tabela">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["linhas"], $_POST["colunas"])) {
        $linhas = intval($_POST["linhas"]);
        $colunas = intval($_POST["colunas"]);

        echo "Tabela Gerada: ";
        echo "<table>";
        $i = 0;
        while ($i < $linhas) {
            echo "<tr>";
            $j = 0;
            while ($j < $colunas) {
                echo "<td>L{$i} C{$j}</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        echo "</table>";
    }
    ?>
    
</body>
</html>