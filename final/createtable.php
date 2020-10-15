<?php
			$dbhost='localhost';
            $dbuser='root';
            $dbpass='1234';
			$dbname='hive';
            //create connection
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
			
			//check connection
            if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);}
			
			//select database
			
			$conn->select_db($dbname);
			
	//table creation	
//signup	
			$sql_signup = "CREATE TABLE signup(
			firstname VARCHAR(20) NOT NULL,
			lastname VARCHAR(20) NOT NULL,
			email VARCHAR(40) PRIMARY KEY,
			password VARCHAR(10),
			dob DATE NOT NULL,
			gender VARCHAR(10)
			)";
			if($conn->query($sql_signup)==TRUE)
			{
				echo "TABLE signup created successfully<br/>";
			}
			else{
				 echo "Error creating table: " . $conn->error;
			}
			
		//login	
			$sql_login = "CREATE TABLE login(
			email VARCHAR(40) PRIMARY KEY,
			password VARCHAR(10)NOT NULL,
			FOREIGN KEY(email) REFERENCES signup(email)
			)";
			
			if($conn->query($sql_login)==TRUE)
			{
				echo "<br>TABLE login created successfully<br/>";
			}
			else{
				 echo "<br>Error creating table: " . $conn->error;
			}
?>