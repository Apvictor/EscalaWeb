<?php
include("view/cabecalho.php");
include("conexao-bd/conexao-banco.php");
include("controller/banco-imovel.php");

$id = $_GET['id'];
removeImovel($conexao, $id);
?>

<p class="alert-success">Imóvel: <?= $id ?> Removido! </p>
<!-- Voltar para home -->
<meta http-equiv="refresh" content="1; URL='http://localhost/Armando-Imobiliaria/EscalaWeb/index.php'"/>