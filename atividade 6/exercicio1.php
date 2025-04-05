<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
    <style>
        table {
          border-collapse: collapse;
          width: 50%;
        }
        th, td {
          border: 1px solid #000;
          padding: 8px;
          text-align: center;
        }
        tr:nth-child(odd) {
          background-color: #d9ebff;
        }
        tr:nth-child(even) {
          background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Exercício 1: Tabela Estilizada com Cores Alternadas (FOR)</h2>
      <table>
        <?php
            for ($i = 1; $i <= 8; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 4; $j++) {
                    echo "<td>L{$i} C{$j}</td>";
                }
                echo "</tr>";
            }
        ?>
      </table>
      
</body>
</html>