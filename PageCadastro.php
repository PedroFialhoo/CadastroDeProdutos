<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            width: 350px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"], 
        input[type="number"], 
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #66a6ff;
            box-shadow: 0 0 6px rgba(102,166,255,0.5);
        }

        .btn {
            width: 100%;
            padding: 12px;
            background: #66a6ff;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #4a8fe0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Produto</h2>
        <form method="POST" action="Controller.php">
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" id="codigo" name="cx_codigo" required>
            </div>

            <div class="form-group">
                <label for="produto">Produto:</label>
                <input type="text" id="produto" name="cx_produto" required>
            </div>

            <div class="form-group">
                <label for="data_validade">Data de Validade:</label>
                <input type="date" id="data_validade" name="cx_data_validade" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" id="preco" name="cx_preco" required>
            </div>

            <button type="submit" class="btn">Registrar</button>
        </form>
    </div>
</body>
</html>
