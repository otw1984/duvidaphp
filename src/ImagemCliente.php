<?php

class ImagemCliente {

    private $id;
    private $imagem;
    private $idCliente;


    /*
     ********************************
     * GETTERS AND SETTERS
     * ******************************
     */
    //id
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
       return $this->id = $id;
    }

    //imagem
    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        return $this->imagem = $imagem;
    }

    //idCliente
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente)
    {
        return $this->idCliente = $idCliente;
    }

}