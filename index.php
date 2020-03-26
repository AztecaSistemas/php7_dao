<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

// Carrega um usuario pelo ID
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

// Carrega a lista de usuarios (utiliza método static function)
//$lists = Usuario::getList();
//echo json_encode($lists);

// Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// Carrega um usuário informando login e senha
$usuario = new Usuario();
$usuario->login("root", "!@$#.");
echo $usuario;

?>