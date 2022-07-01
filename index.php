<?php

require_once("config.php");
//carrega um usuário
/*
$root = new Usuario();
$root->loadById(25);
cho $root;
*/

//Carrega uma lista de todos os usuários
/*
$lista = USUARIO::getList();

echo json_encode($lista);
*/

//Carrega uma lista de usuários buscando pelo Login 
/*
$search = Usuario::search("jurandi");

echo json_encode($search);
*/

//Carrega um usuário usando o login e a senha
/*
$usuario = new Usuario();
$usuario->login("jurandi","1111");

echo $usuario;
*/

//inserindo usuário
/*
$aluno = new Usuario("aluno","@alun0");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(25);

$usuario->update("Jurandi", "3333");

echo $usuario;

?>