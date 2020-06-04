<?php include("conexao.php")?>


<?php

//session_start();


//$_SESSION["usuario_logado"] = $email;

?>

<?php

if(isset($_COOKIE["usuario_logado"])){

    $email = $_COOKIE["usuario_logado"];
}
    function buscaUsuario($conexao, $email) {
        //$senhaMd5 = md5($senha);
        $query = "select * from usuarios where email='{$email}'";
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
       }






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