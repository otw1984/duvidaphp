<?php
//INICIO AUTOLOAD DE ARQUIVOS
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();
//FIM AUTOLOAD

$file = $_FILES['arquivo'];
$count = count($file['name']);


for ($i = 0; $i < $count; $i++) {
    $arquivo = array(
        'name' => $file['name'][$i],
        'type' => $file['type'][$i],
        'tmp_name' => $file['tmp_name'][$i],
        'error' => $file['error'][$i],
        'size' => $file['size'][$i]
    );

    $imagem = new Imagem();
    $imagem->setArquivo($arquivo);

    $imgFacade =  new ImagemFacade();
    $imgFacade->validaImagem($imagem);

    echo "<br />";
}










