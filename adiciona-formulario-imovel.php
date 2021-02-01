<?php
include("view/cabecalho.php");

?>

<h1>Formulário de Imóveis</h1>
<!-- FORMULÁRIO -->
<div class="container tabela">
    <form action="adiciona-imovel.php" method="GET">
        <table class="table">
            <tr>
                <td>Imagem</td>
                <td><input class="form-control" type="text" name="imagem" required placeholder="Exemplo: https://img.com"></td>
            </tr>
            <tr>
                <td>Imóvel</td>
                <td><input class="form-control" type="text" name="imovel" required placeholder="Exemplo: Galpão"></td>
            </tr>
            <tr>
                <td>Rua</td>
                <td><input class="form-control" type="text" name="rua" required placeholder="Exemplo: Carlo Maderna"></td>
            </tr>
            <tr>
                <td>Bairro</td>
                <td><input class="form-control" type="text" name="bairro" required placeholder="Exemplo: Itaquera"></td>
            </tr>
            <tr>
                <td>Cidade</td>
                <td><input class="form-control" type="text" name="cidade" required placeholder="Exemplo: São Paulo" /></td>
            </tr>
            <tr>
                <td>Valor</td>
                <td><input class="form-control" type="number" name="valor" required placeholder="Exemplo: 100.000" /></td>
            </tr>
            <tr>
                <td>Informações</td>
                <td><textarea class="form-control" rows="4" cols="50" name="informacao" required> </textarea></td>
            </tr>
            <tr>
                <td><input class="btn btn-danger" value="Voltar" onClick="history.go(-1)"></td>
                <td><input class="btn btn-primary" type="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>
</div>

<?php include("view/rodape.php") ?>