<?php
    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbpassword ='';
    $dbName = 'formulario-daniel';

    $conexao = new mysqli($dbhost,$dbUsername,$dbpassword,$dbName);

   // if($conexao->connect_errno)
   //{
   //    echo "Erro";
   //}
   //else
  // {
   //    echo "conexao efetuada com sucesso";
   //}