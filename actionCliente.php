<?php
//INICIO AUTOLOAD DE ARQUIVOS
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();
//FIM AUTOLOAD


$cliente = new Cliente();
$cliente->setNome($_POST['nome'])
    ->setIdade($_POST['idade']);

$clienteDAO = new ClienteDAO();
$clienteDAO->addCliente($cliente);