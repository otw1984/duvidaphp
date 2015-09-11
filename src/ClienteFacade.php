<?php

class ClienteFacade
{

    public function gravarCliente($cliente)
    {
        $clienteDAO = new ClienteDAO();
        $clienteDAO->cadastraCliente($cliente);
        echo "Cadastro feito com sucesso!!!";
    }

} 