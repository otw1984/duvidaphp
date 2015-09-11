<?php


class ConnDB
{
    private static $host;
    private static $dbname;
    private static $user;
    private static $pass;
    private static $dsn;
    private static $connect = null;


    //EXECUTA A CONEXAO
    public function execConn()
    {
        return self::conectar();
    }

    //CRIA A CONEXAO
    private static function conectar()
    {
        try{
            if(self::$connect == null){
                self::config();

                self::$connect = new \PDO(self::$dsn, self::$user, self::$pass);
            }
        } catch (PDOException $e){
            echo "Erro, código: " . $e->getCode() . "<br />" . $e->getMessage() . "<br />" . $e->getFile() . "<br />" . $e->getLine();
            die;
        }

        self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$connect;

    }

    //ATRIBUI VALORES AS VARIAVEIS
    private static function config()
    {
        self::$host = 'localhost';
        self::$dbname = 'teste';
        self::$user = 'root';
        self::$pass = 'otw1984';

        self::$dsn = 'mysql: host=' . self::$host . ';dbname=' . self::$dbname;
    }

}
