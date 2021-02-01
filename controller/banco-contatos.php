<?php
//Adicionar Contatos
function insereContatos($conexao, $nome, $email, $telefone, $mensagem)
{
    $query = "INSERT INTO contatos(nome, email, telefone, mensagem) VALUES('{$nome}', '{$email}', '{$telefone}', '{$mensagem}')";
    return mysqli_query($conexao, $query);
}

//Listar contatos
function listarContatos($conexao)
{
    $resultado = mysqli_query($conexao, "SELECT * FROM contatos");

    $contatos = array();

    //Listar todos os contatos
    while ($contato = mysqli_fetch_assoc($resultado)) {
        //Adicionar contatos no Array
        array_push($contatos, $contato);
    }
    return $contatos;
}

//Buscar contatos para alteração
function buscaContato($conexao, $id)
{
    $query = "SELECT * from contatos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

//Altera Contatos
function alteraContatos($conexao, $id, $nome, $email, $telefone, $mensagem)
{
    $query = "UPDATE contatos SET nome = '{$nome}', email = '{$email}', telefone = '{$telefone}', mensagem = '{$mensagem}' where id = {$id}";
    return mysqli_query($conexao, $query);
}

//Remover Contatos
function removeContatos($conexao, $id)
{
    $query = "DELETE FROM contatos WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}