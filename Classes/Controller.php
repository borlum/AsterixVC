<?php
/**
 * Controller.php
 * => Simple Controller class, for a hint of MVC
 */

class Controller {
    private $dbh = NULL;

    function query($sql) {
        $this->openConn();
        
        $data = $this->dbh->query($sql);

        $this->closeConn();

        return $data;
    }

    function exec($sql) {
        $this->openConn();

        $count =  $this->dbh->exec($sql);

        $this->closeConn();

        return $count;
    }

    function openConn() {
        try {
            $this->dbh = new PDO('sqlite:/' . dirname(__FILE__) . '/../data.db');
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        return 0;
    }

    function closeConn() {
        $this->dbh = NULL; return 0;
    }

    function view($file,$data) {
        $file = dirname(__FILE__) . '/../views/' . $file;
        extract($data);
        ob_start();

        if (is_file($file)) {
            include($file);
        }
        $return =  ob_get_clean();
        return $return;
    }

    function url($path) {
        return $_SERVER['REQUEST_URI'] . '/' . $path;
    }
}