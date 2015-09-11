<?php

class ClienteDAO extends ConnDB
{

    public function cadastraCliente(Cliente $cliente)
    {
        $query = "INSERT INTO cliente (nome, idade) VALUES (:nome, :idade)";
        $stmt = $this->execConn()->prepare($query);

        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':idade', $cliente->getIdade());

        $stmt->execute();
    }
}

