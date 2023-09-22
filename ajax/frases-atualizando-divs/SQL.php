<?php
class DBConnection {

    public $_dbHostname = "localhost";
    public $_dbName = "db";
    public $_dbUsername = "usuario";
    public $_dbPassword = "";
    public $_con;

    public function conectar() {
        try {
             echo"conexão feita com sucesso";
            $this->_con = new PDO("mysql:host=$this->_dbHostname;
                                         dbname=$this->_dbName",
                                                $this->_dbUsername,
                                                $this->_dbPassword);
            $this->_con->setAttribute(PDO::ATTR_ERRMODE,
                                      PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
    // return Connection
    public function returnConnection() {
        return $this->_con;
    }
}
?>