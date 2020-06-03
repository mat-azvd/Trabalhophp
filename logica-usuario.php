<?php include("conexao.php")?>


<?php

session_start();


//$_SESSION["usuario_logado"] = $email;

?>


<?php
function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
 }
?>


<?php
function verificaUsuario() {
    if(!usuarioEstaLogado()) {
    header("Location: index.php?falhaDeSeguranca=true");
    die();
    }
   
}


function usuarioLogado($email) {
    return $_SESSION["usuario_logado"];
   }
   
   

   function logaUsuario($email) {
    $_SESSION["usuario_logado"] = $email;
   }
   
   


?>