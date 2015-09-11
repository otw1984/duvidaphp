<?php
//INICIO AUTOLOAD DE ARQUIVOS
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();
//FIM AUTOLOAD


$imagemCliente = new ImagemCliente();
$imagemCliente->setArquivo($_FILES['arquivo']);
$imagemCliente->setIdCliente(2);


$imagemClienteFacade = new ImagemClienteFacade();
$imagemClienteFacade->gravarImagemCliente($imagemCliente);


