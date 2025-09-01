<?php
  class Conexao{

    public function conectarPdo(){
      try{
        $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa","root","pedro");
        $conecta -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conecta;
      }
      catch(PDOExceptio $erro){
        echo "Erro na conexão";
        return null;
      }
        
    }

    public function registrarPdo($codigo, $produto , $data_validade , $preco){
      try{
          $conecta = $this->conectarPdo();
          $texto = "INSERT INTO produtos(codigo,produto,data_validade,preco) VALUES('".$codigo."','".$produto."','".$data_validade."','".$preco."')";
          $conecta -> exec($texto);          
          header("Location: PageConsulta.php");
          exit;
        }catch(PDOException $erro){
          echo "Erro ao gravar dados";
        }
    }

    public function consultarPdo() {
      try {
          $conecta = $this->conectarPdo();
          $script = "SELECT * FROM produtos";

          $data = $conecta->query($script);

          while ($linha = $data->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td>" . htmlspecialchars($linha['codigo']) . "</td>";
              echo "<td>" . htmlspecialchars($linha['produto']) . "</td>";
              echo "<td>" . htmlspecialchars($linha['data_validade']) . "</td>";
              echo "<td>" . htmlspecialchars($linha['preco']) . "</td>";
              echo "</tr>";
          }
      } catch (PDOException $erro) {
          echo "<tr><td colspan='4'>Erro ao consultar dados: " . $erro->getMessage() . "</td></tr>";
      }
    }

  }
?>

