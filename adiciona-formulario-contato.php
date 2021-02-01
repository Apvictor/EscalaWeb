<?php
include("view/cabecalho.php");

?>

<h1>Formulário de Contato</h1>
<!-- FORMULÁRIO -->
<div class="container tabela">
    <form action="adiciona-contato.php" method="GET">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome" required placeholder="Exemplo: Armando Pereira"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input class="form-control" type="email" name="email" required placeholder="Exemplo: Armando@gmail.com"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input class="form-control" type="number" name="telefone" required placeholder="Exemplo: 11998887771" /></td>
            </tr>
            <tr>
                <td>Mensagem</td>
                <td><textarea class="form-control" rows="4" cols="50" name="mensagem" required> </textarea></td>
            </tr>
            <tr>
                <td><input class="btn btn-danger" value="Voltar" onClick="history.go(-1)"></td>
                <td><input class="btn btn-primary" type="submit" value="Enviar" /></td>
            </tr>
        </table>
    </form>
</div>

<?php include("view/rodape.php") ?>