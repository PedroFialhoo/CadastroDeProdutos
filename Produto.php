<?php
require_once 'Conexao.php';

class produto{

   public $codigo;
   public $produto;
   public $data_validade;
   public $preco;

   public function __construct($codigo , $produto, $data_validade , $preco){
    $this ->codigo = $codigo;
    $this ->produto = $produto;
    $this ->data_validade = $data_validade;
    $this ->preco = $preco;
   }

   
   public function registrar() {
      $dao = new Conexao();
      $dao -> registrarPdo($this ->codigo,$this ->produto,$this ->data_validade,$this ->preco);
  }
}

?>