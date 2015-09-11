<?php

class ImagemFacade
{
    public function gravarImagem($imagem)
    {
        $ImagemDAO = new ImagemDAO();
        $ImagemDAO->cadastraImagem($imagem);
        echo "Cadastro feito com sucesso!!!";
    }
}








