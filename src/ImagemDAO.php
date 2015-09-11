<?php

class ImagemDAO extends ConnDB
{

    public function cadastraImagem(Imagem $imagem)
    {
        $query = "INSERT INTO imagem_cliente (imagem) VALUES (:imagem)";
        $stmt = $this->execConn()->prepare($query);

        $stmt->bindValue(':imagem', $imagem->getImagem());
        $stmt->execute();
    }
}