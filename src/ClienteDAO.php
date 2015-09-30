<?php


class ClienteDAO extends ConnDB {

    public function addCliente(Cliente $cliente){
        $sql = "INSERT INTO cliente (nome, idade) VALUES (:nome, :idade)";
        $stmt = $this->execConn()->prepare($sql);

        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':idade', $cliente->getIdade());

        $stmt->execute();
    }
} 