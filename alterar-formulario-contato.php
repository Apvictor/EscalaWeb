<?php
include("view/cabecalho.php");
include("conexao-bd/conexao-banco.php");
include("controller/banco-contatos.php");

$id = $_GET['id'];
$contato = buscaContato($conexao, $id);

?>

<h1>Alterando Contatos</h1>
<!-- FORMULÁRIO -->
<div class="container tabela">
    <form action="altera-contato.php">
        <table class="table">
            <tr>
                <td><input class="form-control" type="hidden" name="id" value="<?=$contato['id']?>" required placeholder="Exemplo: 1"></td>
            </tr>
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome" value="<?=$contato['nome']?>" required placeholder="Exemplo: Armando Pereira"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input class="form-control" type="email" name="email" value="<?=$contato['email']?>" required placeholder="Exemplo: Armando@gmail.com"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input class="form-control" type="number" name="telefone" value="<?=$contato['telefone']?>" required placeholder="Exemplo: 11998887771"/></td>
            </tr>
            <tr>
                <td>Mensagem</td>
                <td><textarea class="form-control" rows="4" cols="50" name="mensagem"><?=$contato['mensagem']?> </textarea></td>
            </tr>
            <tr>
                <td><input class="btn btn-danger" value="Voltar" onClick="history.go(-1)"></td>
                <td><input class="btn btn-primary" type="submit" value="Alterar" /></td>
            </tr>
        </table>
    </form>
</div>

<?php include("view/rodape.php") ?>