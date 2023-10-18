<?php

class MySQLClass {

    private $host;
    private $username;
    private $password;
    private $database;
    private $charset;

    private $pdo;
    private $connected = false;

    public function __construct()
    {
        $this->host     = $_SESSION['HOST_CLIENT'];
        $this->username = $_SESSION['DB_USER'];
        $this->password = $_SESSION['DB_PASS'];
        $this->database = $_SESSION['DB_USER'];
        $this->charset  = "utf8mb4";

        /*$log   = array();
        $log[0] = $this->host;
        $log[1] = $this->username;
        $log[2] = $this->password;
        $log[3] = $this->database;
        $log[4] = $_SESSION['USER'];
        ob_start();
        print_r($log);
        $tmp = ob_get_clean();
        file_put_contents("DEBUG_MYSQL.log", $tmp);*/

        $this->connect();

    }

    private function connect()
    {

        if($this->connected === false) {

            $dsn = "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            try {

                $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
                $this->connected = true;

                if($this->pdo === true){
                    $this->connected = true;
                    return true;
                } else {
                    return false;
                }

            } catch (PDOException $e) {
                
                throw new Exception("Error connecting to the database: " . $e->getMessage());
                return false;
            }

        } else {
            return true;
        }
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt->execute($params);

        } catch (PDOException $e) {
            throw new Exception("Error executing query: " . $e->getMessage());
        }

        return $stmt;
    }

    public function fetchAll($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll();
    }

    public function fetchRow($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->fetch();
    }

    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }

    public function getMessage()
    {
        return $this->pdo->getMessage();
    }

    public function getOne($sql, $params = [])
    {   
        $stmt = $this->query($sql, $params);
        $arr = $stmt->fetchAll();

        $i = 0;
        foreach($arr as $info){
            foreach($info as $coluna => $val){
                if($i == 0){
                    $ret = $val;
                }
                $i++;
            }
        }

        return $ret;
    }

    public function fetchArrayAssoc($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        $arr = $stmt->fetchAll();
        $retorno = array();

        $i = 0;
        foreach($arr as $info){
            foreach($info as $coluna => $val){
                $retorno[$i][$coluna] = $val;
            }
            $i++;
        }

        ob_start();
        print_r($retorno);
        $tmp = ob_get_clean();
        file_put_contents('fetchArrayAssoc...log', $tmp);

        return $retorno;
    }

}
