<?php
include("view/cabecalho.php");
include("conexao-bd/conexao-banco.php");
include("controller/banco-imovel.php");


$id = $_GET['id'];
$imovel = buscaImovel($conexao, $id);

?>



<h1>Alterando Imóveis</h1>
<!-- FORMULÁRIO -->
<div class="container tabela">
    <form action="altera-imovel.php" method="GET">
        <table class="table">
            <tr>
                <td><input class="form-control" type="hidden" name="id" value="<?= $imovel['id'] ?>" required placeholder="Exemplo: 1"></td>
            </tr>

            <tr>
                <td>Imagem</td>
                <td><input class="form-control" type="text" name="imagem" value="<?= $imovel['imagem'] ?>" required placeholder="Exemplo: https://img.com"></td>
            </tr>
            <tr>
                <td>Imóvel</td>
                <td><input class="form-control" type="text" name="imovel" value="<?= $imovel['imovel'] ?>" required placeholder="Exemplo: Galpão"></td>
            </tr>
            <tr>
                <td>Rua</td>
                <td><input class="form-control" type="text" name="rua" value="<?= $imovel['rua'] ?>" required placeholder="Exemplo: Carlo Maderna"></td>
            </tr>
            <tr>
                <td>Bairro</td>
                <td><input class="form-control" type="text" name="bairro" value="<?= $imovel['bairro'] ?>" required placeholder="Exemplo: Itaquera"></td>
            </tr>
            <tr>
                <td>Cidade</td>
                <td><input class="form-control" type="text" name="cidade" value="<?= $imovel['cidade'] ?>" required placeholder="Exemplo: São Paulo" /></td>
            </tr>
            <tr>
                <td>Valor</td>
                <td><input class="form-control" type="number" name="valor" value="<?= $imovel['valor'] ?>" required placeholder="Exemplo: 100.000" /></td>
            </tr>
            <tr>
                <td>Informações</td>
                <td><textarea class="form-control" rows="4" cols="50" name="informacao" required> <?= $imovel['informacao'] ?></textarea></td>
            </tr>
            <tr>
                <td><input class="btn btn-danger" value="Voltar" onClick="history.go(-1)"></td>
                <td><input class="btn btn-primary" type="submit" value="Alterar" /></td>
            </tr>
        </table>
    </form>
</div>

<?php include("view/rodape.php") ?>