<?php

class Imagem {

    private $id;
    private $imagem;

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
}