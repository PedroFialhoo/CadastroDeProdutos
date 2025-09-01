<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Produto</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Cadastro de Produto</h1>
    <form class="form" method="POST" action="Controller.php">
      <label for="codigo">Código:</label>
      <input type="text" id="codigo" name="cx_codigo" required>

      <label for="produto">Produto:</label>
      <input type="text" id="produto" name="cx_produto" required>

      <label for="data_validade">Data de Validade:</label>
      <input type="date" id="data_validade" name="cx_data_validade" required>

      <label for="preco">Preço:</label>
      <input type="number" step="0.01" id="preco" name="cx_preco" required>

      <button type="submit" class="btn">Salvar</button>
    </form>
    <a href="PageMenu.php" class="voltar">⬅ Voltar ao Menu</a>
  </div>
</body>
</html>
