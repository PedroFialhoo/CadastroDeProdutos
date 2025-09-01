<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Consulta de Produtos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Lista de Produtos</h1>
    <table>
      <thead>
        <tr>
          <th>Código</th>
          <th>Produto</th>
          <th>Data de Validade</th>
          <th>Preço (R$)</th>
        </tr>
      </thead>
      <tbody>        
        <?php
          require "Conexao.php";
          $conexao = new Conexao();
          $conexao->consultarPdo();
        ?>
      </tbody>
    </table>
    <a href="PageMenu.php" class="voltar">⬅ Voltar ao Menu</a>
  </div>
</body>
</html>
