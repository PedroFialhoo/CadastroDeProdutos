<?php
class Conexao{
public function registrarPdo($codigo, $produto , $data_validade , $preco){
   try{
    $conecta = new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa","root","");
    $conecta -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $texto = "INSERT INTO produtos(codigo,produto,data_validade,preco) VALUES('".$codigo."','".$produto."','".$data_validade."','".$preco."')";
    $conecta -> exec($texto);
    echo "Dados gravados com sucesso!";
      }catch(PDOExeception $erro){
       echo "Erro ao gravar dados";
      }
}

}
?>