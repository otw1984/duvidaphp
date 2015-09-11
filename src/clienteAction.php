<?php

//INICIO AUTOLOAD DE ARQUIVOS
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();
//FIM AUTOLOAD


//OBJETO CLIENTE SET
$cliente = new Cliente();
$cliente
    ->setNome($_POST['nome']) //recebe nome do formulario (pagina de cadastro)
    ->setIdade($_POST['idade']) //recebe idade do formulario (pagina de cadastro)
;

//OBJETO FACADE
$clienteFacade = new ClienteFacade();
$clienteFacade->gravarCliente($cliente);
