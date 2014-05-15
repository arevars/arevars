<?php

class PDOAdapter {

    protected $_host,
            $_user,
            $_password,
            $_dbname,
            $_result;
    public $con;

    public function __construct($host, $user, $password, $dbName, $persistant = false) {
        $this->_host = $host;
        $this->_user = $user;
        $this->_password = $password;
        $this->_dbname = $dbName;

        try {
            $this->con = new PDO("mysql:dbname=$this->_dbname;host=$this->_host;charset=utf8", $this->_user, $this->_password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->con->setAttribute(PDO::ATTR_PERSISTENT, $persistant);
            
            return $this->con;
            
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function select($query) {
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function update($query) {
        $stmt = $this->con->prepare($query);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($query) {
        $stmt = $this->con->prepare($query);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function __destruct() {
        
    }

    public function __clone() {
        
    }

}
