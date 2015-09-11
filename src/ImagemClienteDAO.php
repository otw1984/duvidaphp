<?php

class ImagemClienteDAO extends ConnDB
{

    public function cadastraImagemCliente(ImagemCliente $imagemCliente)
    {
        $query = "INSERT INTO imagem_cliente (imagem, id_cliente) VALUES (:imagem, :idCliente)";
        $stmt = $this->execConn()->prepare($query);

        $stmt->bindValue(':imagem', $imagemCliente->getImagem());
        $stmt->bindValue(':idCliente', $imagemCliente->getIdCliente());

        $stmt->execute();
    }
}