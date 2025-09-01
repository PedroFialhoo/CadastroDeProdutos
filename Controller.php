<?php
   require_once 'produto.php';
   if($_SERVER['REQUEST_METHOD']=='POST'){
     $codigo = $_POST['cx_codigo'];
     $produto = $_POST['cx_produto'];
     $data_validade = $_POST['cx_data_validade'];
     $preco = $_POST['cx_preco'];

     $p = new Produto($codigo, $produto, $data_validade, $preco);

    
     $p->registrar();
     
   }
?>