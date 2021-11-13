<?php

 $texto = $_POST["txtTexto"];
 $codificado = md5($texto);
 echo "Senha codificada ".$texto." em MD5: ".$codificado."<br>";
/*

 //MD5
 $texto = 'técnico em desenvolvimento de sistemas';
 $codificado = md5($texto);
 echo "Resultado do texto codificação usando md5: " . $codificado;


 //sha1

 $texto = 'técnico em desenvolvimento de sistemas';
 $codificado = sha1($texto);
 echo "Resultado do texto codificação usando sha1: " . $codificado;



//passwordhash

 $texto = "Técnico em Desenvolvimento de Sistemas";
 $codificado = password_hash($texto, PASSWORD_DEFAULT);
 echo "Texto Codificado: ".$codificado."<br>";
*/
?>