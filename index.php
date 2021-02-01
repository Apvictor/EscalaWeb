<?php
include("view/cabecalho.php");
include("conexao-bd/conexao-banco.php");
include("controller/banco-imovel.php");
?>

<h2>Lista de Imóveis</h2>

<div class="container">

    <div class="row">

        <?php
        $imoveis = listarImovel($conexao);
        //Percorrer o Array imoveis
        foreach ($imoveis as $imovel) :
        ?>

            <div class="card" style="border: 1px solid black; margin-right: 15px;">
                <!-- IMG -->
                <div height="33%" width="100px">
                    <img height="200px" width="100px" class="card-img-top" src=<?= $imovel['imagem'] ?>>
                </div>

                <!-- DESCRIÇÃO -->
                <div height="33%" width="100px">
                    <!-- Imóvel -->
                    <h3><?= $imovel['imovel'] ?></h3>

                    <!-- Rua -->
                    <label class="card-text"><?= $imovel['rua'] ?>, </label>

                    <!-- Bairro -->
                    <label class="card-text"><?= $imovel['bairro'] ?></label>

                    <!-- Cidade -->
                    <p class="card-text"><?= $imovel['cidade'] ?></p>

                    <!-- informacao -->
                    <p class="card-text"><?= $imovel['informacao'] ?></p>
                    
                    <!-- BOTÕES -->
                    <div height="33%" width="100px">

                    </div>
                    <!-- Valor -->
                    <h1>R$ <?= $imovel['valor'] ?></h1>
                    <a style="margin-top: 20px;" href="adiciona-formulario-contato.php" class="btn btn-primary">Contatar</a>
                    <a style="margin-top: 20px; " class="btn btn-primary" href="alterar-formulario-imovel.php?id=<?= $imovel['id'] ?>">Alterar</a>
                    <a style="margin-top: 20px;" href="remove-imovel.php?id=<?= $imovel['id'] ?>" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php include("view/rodape.php") ?>