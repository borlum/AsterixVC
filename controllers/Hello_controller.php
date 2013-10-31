<?php
/*---- Lets make a controller ----*/

class Hello_controller extends Controller {
    function __construct(){
        //echo 'JEG LEVER';
    }

	function index(){ 
        $data['hello'] = 'Hello, World!';

        //$sql = "DROP TABLE foo";

        //$this->exec($sql);

		$sql = "SELECT * FROM foo";

    	foreach ($this->query($sql) as $row) {
        	print $row['bar1'] .' - '. $row['bar2'] . '<br />';
        }

        echo $this->view('view_hello.php', $data);
    }
}