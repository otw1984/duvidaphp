<?php

//GRAVA IMAGEM
public function gravarImagemCliente()
    {
        try{
            $this->validaExistencia();
            $this->validaTamanhoArquivo();
            $this->validaFormatoArquivo();

            $this->imagem = $this->nomeDinamico();
            $nomeTemp = $this->arquivo['tmp_name'];
            $pasta = "img/";
            move_uploaded_file($nomeTemp, $pasta . $this->imagem);

            return $this->imagem;

        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

//VERIFICA SE ARQUIVO EXISTE
private function validaExistencia()
{
    try{
        if (empty($this->arquivo['tmp_name'])) {
            throw new Exception("Você não selecionou o arquivo.");
        }
    }catch (Exception $e){
        throw new Exception($e->getMessage());
    }
}

//VALIDA TAMANHO DE ARQUIVO
private function validaTamanhoArquivo()
{
    try{
        $tamanho = $this->arquivo['size'];
        $tamanhoPermitido = 1024 * 500; //500kb

        if ($tamanho > $tamanhoPermitido) {
            throw new Exception("O tamanho do arquivo que está tentando enviar ultrapassa o permitido, escolha outro arquivo.");
        }
    }catch (Exception $e){
        throw new Exception($e->getMessage());
    }
}

//VALIDA OS FORMATOS DE ARQUIVOS PERMITIDOS
private function validaFormatoArquivo()
{
    try{
        $tipo = $this->arquivo['type'];
        $tiposPermitidos = ['image/jpeg', 'image/jpg'];

        if (array_search($tipo, $tiposPermitidos)===false) {
            throw new Exception("O tipo de arquivo que está tentando enviar não é permitido, escolha outro arquivo.");
        }
    }catch (Exception $e){
        throw new Exception($e->getMessage());
    }
}

//NOME DINAMICO PARA O ARQUIVO
private function nomeDinamico()
{
    $nome = $this->arquivo['name'];
    $e = explode(".", $nome);
    $ext = strtolower(end($e));
    $nome = md5(time()) . "." . $ext;
    return $nome;
}