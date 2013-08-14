<?php
/*---- Lets make a controller ----*/

class Hello_controller extends Controller {
    function __construct(){
        //echo 'JEG LEVER';
    }

	function index(){ 
        $data['hello'] = 'Hello, World!';
        echo $this->view('view_hello.php', $data);
    }
}