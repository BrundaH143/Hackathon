        <?php
            $dbhost='localhost';
            $dbuser='root';
            $dbpass='1234';
			$dbname='hive';
            //connection
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
            if(!$conn){
                die('could not connect :'.mysqli_error());
            }
           echo("connected\n"); 
        ?>
    