<?php

class ImagemFacade
{
    public function validaImagem(Imagem $imagem)
    {
        try {
            $this->validaExistencia($imagem);
            $this->validaFormatoArquivo($imagem);
            $this->validaTamanhoArquivo($imagem);

            $imagem->setImagem($this->nomeDinamico($imagem));
            $nomeTemp = $imagem->getArquivo()['tmp_name'];
            $pasta = "img/";
            move_uploaded_file($nomeTemp, $pasta . $imagem->getImagem());

            $imagemDAO = new ImagemDAO();
            $imagemDAO->cadastraImagem($imagem);

            echo "Imagem {$imagem->getImagem()} cadastrada com sucesso!!! \n";

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /*
     ********************************
     * VALIDAÇÕES - TIPO DE ARQUIVO
     * ******************************
     */
    //VERIFICA SE ARQUIVO EXISTE
    private function validaExistencia($imagem)
    {
        try{
            if (empty($imagem->getArquivo()['tmp_name'])) {
                throw new Exception("Você não selecionou o arquivo.\n");
            }
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    //VALIDA OS FORMATOS DE ARQUIVOS PERMITIDOS
    private function validaFormatoArquivo($imagem)
    {
        try{
            $tipo = $imagem->getArquivo()['type'];
            $tiposPermitidos = ['image/jpeg', 'image/jpg'];

            if (array_search($tipo, $tiposPermitidos)===false) {
                throw new Exception("O tipo de arquivo que está tentando enviar não é permitido, escolha outro arquivo.\n");
            }
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    //VALIDA TAMANHO DE ARQUIVO
    private function validaTamanhoArquivo($imagem)
    {
        try{
            $tamanho = $imagem->getArquivo()['size'];
            $tamanhoPermitido = 1024 * 500; //500kb

            if ($tamanho > $tamanhoPermitido) {
                throw new Exception("O tamanho do arquivo que está tentando enviar ultrapassa o permitido, escolha outro arquivo.\n");
            }
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    //NOME DINAMICO PARA O ARQUIVO
    private function nomeDinamico($imagem)
    {
        $nome = $imagem->getArquivo()['name'];
        $e = explode(".", $nome);
        $ext = strtolower(end($e));
        $nome = md5(time().rand()) . "." . $ext;
        return $nome;
    }

}









