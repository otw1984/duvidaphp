<?php

class Imagem {
    private $arquivo;
    private $id;
    private $imagem;

    /*
     ********************************
     * GETTERS AND SETTERS
     * ******************************
     */
    //arquivo
    public function getArquivo()
    {
        return $this->arquivo;
    }

    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
    }

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