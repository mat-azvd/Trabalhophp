<?php include("banco-produtos.php");?>

<?php include("cabecalho.php");?>

<?php include("conexao.php"); ?>


<?php
var_dump ($_GET['id']);

$id = $_GET['id'];


$produto = buscaProduto($conexao, $id);

var_dump ($id);

$nome = $_POST["nome"];
var_dump ($nome);
$preco = $_POST["preco"];
var_dump ($preco);
$categoria = $_POST["categoria"];
var_dump ($categoria);
$detalhes = $_POST["detalhes"];
var_dump ($detalhes);
$imagem = $_FILES['imagem']['name'];
$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
$pasta_dir = "imagem/";
$arquivo_nome = $imagem;

var_dump ($arquivo_nome);

if($arquivo_nome == null) {
    $diretorio = $produto['imagem'];
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio);
} else {
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta_dir.$arquivo_nome);
    $diretorio = $pasta_dir.$arquivo_nome;
}

var_dump ($diretorio);

var_dump ($arquivo_nome);

var_dump ($id);

function alteraProduto($conexao, $nome, $preco, $categoria, $detalhes, $diretorio, $id) {
 $query = "update produtos set nome='{$nome}', preco='{$preco}', categoria='{$categoria}', detalhes='{$detalhes}', imagem='{$diretorio}' where id = '$id' ";
 $resultadoDaInsercao = mysqli_query($conexao, $query);
 return $resultadoDaInsercao;
}




if(alteraProduto($conexao, $nome, $preco, $categoria, $detalhes, $diretorio, $id )) {

    header("Location: pagina-produto.php?id= $id");

die();
?>
<?php
} else {
$msg = mysqli_error($conexao);
?>
<p class="alert-danger">O produto <?= $nome; ?> não foi alterado: <?=$msg ?></p>
<?php
}
mysqli_close($conexao);

?>
