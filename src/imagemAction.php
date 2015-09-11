<?php
//INICIO AUTOLOAD DE ARQUIVOS
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();
//FIM AUTOLOAD


$imagem = new Imagem();
$imagem->setImagem($_FILES['arquivo']);

$imagemFacade = new ImagemFacade();
$imagemFacade->gravarImagem($imagem);


