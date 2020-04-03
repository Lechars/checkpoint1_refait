<?php

include_once 'connecdeux.php';

  $errCount= 0;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    

    	if (empty($_POST["name"])){
        	
        	$errCount +=1;
    	}

    	if (empty($_POST["firstname"])){
       		 
        	$errCount +=1;
   		 }	
  }

  if ($errCount == 0){
      $pdo = new PDO(DSN,USER,PASS);

      $query = 'INSERT INTO bribe (name, payment) VALUES ($_POST["name"], $_POST["payment"])';
      $statement = $pdo->exec($query);
      echo "c'est entré!";
    }

?>