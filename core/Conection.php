<?php

class Conection
{
	private $driver;
    private $host, $user, $pass, $port, $database, $charset;

	public function __construct() {
        $config = require 'config/main.php';
        $db_cfg = $config['db'];
        $this->driver=$db_cfg["driver"];
        $this->host=$db_cfg["host"];
        $this->user=$db_cfg["user"];
        $this->port=$db_cfg["port"];
        $this->pass=$db_cfg["password"];
        $this->database=$db_cfg["database"];
        $this->charset= @$db_cfg["charset"] ?? 'utf8';
    }

    public function pdo(){
        
        $pdo = new PDO($this->driver.":host={$this->host};dbname={$this->database};port={$this->port}", $this->user, $this->pass);
                
        return $pdo;
    }



}