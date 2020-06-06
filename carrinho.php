

<?php include("cabecalho.php");?>

<?php include("banco-produtos.php");?>

<?php include("conexao.php"); ?>

<?php /*$id= $_GET['id'] ?>

<?php $produto = buscaProduto($conexao, $id);*/?>


<?php 
 
    /*session_start();

    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = array_carrinho();
    }

    if(isset($_GET['acao'])) {

        if($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);

            if(!isset($_SESSION['carrinho'][$id])){
                $_SESSION['carrinho'][$id] = 1;
            } else {
                $_SESSION['carrinho'][$id] += 1;
            }
        }

    }

*/

if(isset($_GET['id']) && isset($_COOKIE['usuario_id']) && isset($_GET['add']) ){

$idproduto = $_GET['id'];

$iduser = $_COOKIE['usuario_id'];

$carrinho = addProdutoCarrinho($conexao, $iduser, $idproduto);

$carrinhos = listaProdutoCarrinho($conexao, $iduser); 

header("Location: carrinho.php");

//naoexiste $itenscarrinho = buscaProdutoCarrinho($conexao, $iduser);
            
}

$iduser = $_COOKIE['usuario_id'];

$carrinhos = listaProdutoCarrinho($conexao, $iduser);

?>


<table id="tabela" class="table table-strip" >


        <thead>
            
            <tr> 
                <th ></th>
                <th width="40%">Produto </th>
                <th width="10%">Preço </th>
                <th width="10%">Quantidade</th>
                <th width="10%">Total</th>
                <th width="10%">Imagem</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($carrinhos as $carrinho) :
        
        $id = $carrinho['idproduto'];

        $quantidade = $carrinho['quantidade'];

        //echo($id);

        //echo($quantidade);


        $produto = buscaProduto($conexao, $id);

        ?>
            
        <tr> 
                <th ></th>
                <th width="30%"> <?php echo $produto['nome'] ?></th>
                <th width="20%"> <?php echo $produto['preco'] ?> R$ </th>
                
                <th width="5%">
                    <form action="">
                        <input name="quantidade" type="number" class="form-control" value="<?php echo $quantidade ?>"> </input>
                        <button> alterar </button>
                    </form>
                </th>
                
                <th width="20%"> <?php echo ($produto['preco']*$quantidade) ?> R$ </th>
                <th width="10%"> <?php $produto['imagem'] ?> </th>
                <th>

                <!--<?php echo($iduser); ?>-->
                <!--<?php echo($id); ?>-->
                
                <a href="remover.php?iduser=<?=$iduser ?>&id=<?=$id ?>"><button >Remover</button>
                
                </th>
        </tr>

        <?php endforeach ?>
        <?php
        

        ?>
        </tbody>

    </table>



<!--<div class="flex-viewport" style="overflow: hidden; position: relative;">

        <img class="gmae-image" src=<?= $produto['imagem'] ?> alt="game-01">

                <div class="info-do-produto">
                        <p class="nome-produto"><b><?= $produto['nome'] ?><br></b></p><br>

                        <p class="preço"><b>R$<?= $produto['preco'] ?></b></a><br>

                </div>
                <?php
                                if(isset($_COOKIE["admin_logado"])) {
                                ?>
                                <div class="comprar">
                                <a href="pagina-altera.php?id=<?=  $produto['id'] ?>"><button>Editar </button><br>
                                </div>
                                <?php
                                }else {
                                ?>

                                <div class="comprar">
                                        <button><img src="img/carrinhoDeCompras.png">Comprar </button><br>
                                </div>
                                <?php
                                }
                                ?>
    </div>
-->

<?php include("rodape.php");  ?>
