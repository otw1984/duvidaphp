<?php

class ImagemClienteFacade
{
    public function gravarImagemCliente($imagemCliente)
    {
        $ImagemclienteDAO = new ImagemClienteDAO();
        $ImagemclienteDAO->cadastraImagemCliente($imagemCliente);
        echo "Cadastro feito com sucesso!!!";
    }
}








