<?php
/**
 * Controller.php
 * => Simple Controller class, for a hint of MVC
 */

class Controller {
    private $dbh = NULL;

    function query($sql) {
        try {
            $this->dbh = new PDO('sqlite:/' . dirname(__FILE__) . '/../data.db');
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        $data = $this->dbh->query($sql);

        $this->dbh = NULL;

        return $data;
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