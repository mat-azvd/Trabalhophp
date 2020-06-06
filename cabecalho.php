<html lang="pt-br">

<link rel="stylesheet" type="text/css" href="css/slide.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<head>
    <title>Robot Games</title>
    <meta charset="utf-8">
    <link rel="icon" href="game-controller.ico" type="image/x-icon">

</head>


<body>
<?php
if(isset($_GET["logout"]) && $_GET["logout"]==true) {
    setcookie("admin_logado");
    setcookie("usuario_logado");
?>    

<?php   
    header("Location: index.php");
}
?>

    <div class="fundo">

        <div class="corpo-principal">

            <header>
                <div class="cabecalho">
                    
                    <a href="index.php"> <img id="logo" src="logomarca.png" alt="Robot Games - Logo" class="cabecalho"></a>
                </div>
            </header>

            <div class="barra-header">
                <div>
                    <?php
                    if(isset($_COOKIE["usuario_logado"])) {
                    ?>
                    <p class="text-success">Bem vindo <?=$_COOKIE["usuario_logado"] ?>!</p><br>
                    <a href="editarconta.php" > - Editar conta - </a>
                    <a href="carrinho.php" > - Carrinho - </a>
                    <a href="index.php?logout=true" > - logout - </a>
                    <?php
                    }else {
                            if(isset($_COOKIE["admin_logado"])) {
                                ?>
                                <p class="text-success">Bem vindo <?=$_COOKIE["admin_logado"] ?>!</p><br>
                                <a href="produto-formulario.php"> - Inserir Produto - </a>
                                <a href="index.php?logout=true" > - logout - </a>
                            <?php
                            }else{
                            ?>
                                <a href="minha-conta.php"> - Minha Conta - </a>
                                <a href="cadastro.php"> - Cadastrar-se - </a>
                                <a href="carrinho.php" > - Carrinho - </a>
                            <?php
                            }
                        }
                    ?>
                    
                </div><br>
            </div>

            <div>
                <input class="pesquisa" type="text" placeholder="Procurar...">
            </div>




            <div class="navbar">
                <a id="Playstation" href="pagina-playstation.php">Playstation</a>
                <a id="Xbox" href="pagina-xbox.php">Xbox</a>
                <a id="Nintendo" href="pagina-nintendo.php">Nintendo</a>
                <a id="Clássicos" href="pagina-classicos.php">Classicos</a><br>
            </div>
