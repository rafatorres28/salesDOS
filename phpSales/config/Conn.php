<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace config;

/**
 * Description of conn
 *
 * @author esteb
 */
class Conn {

    private $user;
    private $password;
    private $database;
    private $host;
    private $port;
    private $link;

    public function __construct() {
        $CONFIG = parse_ini_file(".env");
        $this->user = $CONFIG["DB_USER"];
        $this->password = $CONFIG["DB_PASSWORD"];
        $this->database = $CONFIG["DB_NAME"];
        $this->port = $CONFIG["DB_PORT"];
        $this->host = $CONFIG["DB_HOST"];
    }

    public function conn() {
        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);
        if (!$this->link) {
            die("Connection failed: " . mysqli_connect_error());
            return "Fallo en Conexion";

        } else {
            return $this->link;
        }
    }
    
}
