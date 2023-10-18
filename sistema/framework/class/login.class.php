<?php

class MyLoginClass {

    private $gerHost;
    private $gerUser;
    private $gerPass;
    private $gerData;

    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_data;

    public  $ret = false;
    private $arrGetArrClient;

    public function __construct($pin)
    {
        $this->gerHost = '127.0.0.1';
        $this->gerUser = 'root';
        $this->gerPass = '';
        $this->gerData = 'gerenciador_idroid';

        $conn = new mysqli($this->gerHost, $this->gerUser, $this->gerPass, $this->gerData);

        if (!$conn->connect_error) {

            $sql = "SELECT c.* FROM clientes c 
                    INNER JOIN users_clientes uc ON uc.fk_clientes = c.id 
                    WHERE uc.pin = '".$pin."' 
                    ORDER BY c.id ASC LIMIT 1
            ";

            $result = $conn->query($sql);

            $i = 0;
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc())
                {
                    $this->db_host     = $row['db_host'];
                    $this->db_user     = "idroid".str_pad($row['db_user'], 7, '0', STR_PAD_LEFT);
                    $this->db_data     = "idroid".str_pad($row['db_data_base'], 7, '0', STR_PAD_LEFT);
                    $this->db_pass     = $row['db_pass'];
                    $this->arrGetArrClient[$row['id']] = $row;

                    $i++;
                }

            } else {
                $ret = false;
            }

            $ret = $i > 0 ? $ret = true : $ret = false;
            return $ret;

        } else {
            return false;
            //file_put_contents("log.log", "Erro: ".$conn->connect_error);
        }
    }

    public function getHost(){
        return $this->db_host;
    }

    public function getUser(){
        return $this->db_user;
    }

    public function getPassword(){
        return $this->db_pass;
    }

    public function getDatabase(){
        return $this->db_data;
    }

    public function getArrClient(){
        $this->arrGetArrClient;
    }
}

?>