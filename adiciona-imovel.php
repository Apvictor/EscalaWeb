<?php
include("view/cabecalho.php");
include("conexao-bd/conexao-banco.php");
include("controller/banco-imovel.php");

$imagem = $_GET["imagem"];
$imovel = $_GET["imovel"];
$rua = $_GET["rua"];
$bairro = $_GET["bairro"];
$cidade = $_GET["cidade"];
$valor = $_GET["valor"];
$informacao = $_GET["informacao"];

if (insereImovel($conexao, $imagem, $imovel, $rua, $bairro, $cidade, $valor, $informacao)) { ?>
    <p class="alert-success">Imóvel adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="alert-danger">Imóvel não foi adicionado!</p>

<?php
}
?>

<?php include("view/rodape.php"); ?>
<!-- Voltar para home /> -->
<meta http-equiv="refresh" content="1; URL='http://localhost/Armando-Imobiliaria/EscalaWeb/index.php'"/>