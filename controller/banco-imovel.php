<?php
//Adicionar Contatos
function insereImovel($conexao, $imagem, $imovel, $rua, $bairro, $cidade, $valor, $informacao)
{
    $query = "INSERT INTO imovel(imagem, imovel, rua, bairro, cidade, valor, informacao) VALUES('{$imagem}','{$imovel}', '{$rua}', '{$bairro}', '{$cidade}', {$valor}, '{$informacao}')";
    return mysqli_query($conexao, $query);
}

//Listar contatos
function listarImovel($conexao)
{
    $resultado = mysqli_query($conexao, "SELECT * FROM imovel");

    $imoveis = array();

    //Listar todos os contatos
    while ($imovel = mysqli_fetch_assoc($resultado)) {
        //Adicionar contatos no Array
        array_push($imoveis, $imovel);
    }
    return $imoveis;
}

//Buscar contatos para alteração
function buscaImovel($conexao, $id)
{
    $query = "SELECT * from imovel where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

//Altera Contatos
function alteraImovel($conexao, $id, $imagem, $imovel, $rua, $bairro, $cidade, $valor, $informacao)
{
    $query = "UPDATE imovel SET imagem = '{$imagem}', imovel = '{$imovel}', rua = '{$rua}', bairro = '{$bairro}', cidade = '{$cidade}', valor = {$valor}, informacao = '{$informacao}' where id = {$id}";
    return mysqli_query($conexao, $query);
}

//Remover Contatos
function removeImovel($conexao, $id)
{
    $query = "DELETE FROM imovel WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}
