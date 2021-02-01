<?php
include("view/cabecalho.php");
include("conexao-bd/conexao-banco.php");
include("controller/banco-contatos.php");

$id = $_GET["id"];
$nome = $_GET["nome"];
$email = $_GET["email"];
$telefone = $_GET["telefone"];
$mensagem = $_GET["mensagem"];

if (alteraContatos($conexao, $id, $nome, $email, $telefone, $mensagem)) { ?>
    <p class="alert-success">Nome: <?= $nome ?> <br> E-mail <?= $email ?> <br> Telefone <?= $telefone ?> <br> Mensagem <?= $mensagem ?> <br><br> Foram Alterados!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">Nome: <?= $nome ?> <br> E-mail <?= $email ?> <br> Telefone <?= $telefone ?> <br> Mensagem <?= $mensagem ?> <br><br> Não foram Alterados: <?= $msg ?> </p>

<?php
}
?>

<?php include("view/rodape.php"); ?>
<!-- Voltar para home -->
<meta http-equiv="refresh" content="1; URL='http://localhost/Armando-Imobiliaria/EscalaWeb/index.php'"/>