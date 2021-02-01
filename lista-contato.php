<?php
include("view/cabecalho.php");
include("conexao-bd/conexao-banco.php");
include("controller/banco-contatos.php"); 
?>

<h1>Lista de Contatos</h1>

<table class="container table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">MENSAGEM</th>
            <th scope="col">EDITAR</th>
            <th scope="col">REMOVER</th>
        </tr>
    </thead>
    <?php
    $contatos = listarContatos($conexao);
    //Percorrer o Array contatos
    foreach ($contatos as $contato) :
    ?>

        <tr>
            <td><?= $contato['id'] ?></td>
            <td><?= $contato['nome'] ?></td>
            <td><?= $contato['email'] ?></td>
            <td><?= $contato['telefone'] ?></td>
            <td><?= $contato['mensagem'] ?></td>
            <td>
                <a class="btn btn-primary" href="alterar-formulario-contato.php?id=<?= $contato['id'] ?>" class="text-primary">Alterar</a>
            </td>
            <td>
                <a class="btn btn-danger" href="remove-contato.php?id=<?= $contato['id'] ?>" class="text-danger">Remover</a>
            </td>
        </tr>

    <?php
    endforeach
    ?>

</table>

<?php include("view/rodape.php") ?>