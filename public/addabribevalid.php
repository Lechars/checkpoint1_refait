<?php

include_once 'connec.php';

  $errCount= 0;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

      

    	if (empty($_POST["name"])){
        	
        	$errCount +=1;
    	}

    	if (empty($_POST["payment"])){
       		 
        	$errCount +=1;
   		 }	
  }

  if ($errCount == 0){
      $pdo = new PDO(DSN,USER,PASS);
      $statement = $pdo->prepare("INSERT INTO bribe (name, payment) VALUES (:name, :payment)");
      $statement->bindValue(":name",$_POST["name"]);
      $statement->bindValue(":payment",intval($_POST["payment"]));
      $statement->execute();
      //$name = $_POST['name'];
      //$payment = $_POST['payment'];
    
      //$query = "INSERT INTO friend (firstname, lastname) VALUES ('$name', '$payment'])";
      //$statement = $pdo->exec($query);
      echo "c'est entré!";

 }

echo '<form action="book.php" method="post">';

echo "retourner sur le livre:";
echo '<input type="submit" value="retour!">';

echo '</form>';


//$query = "SELECT * FROM bribe ORDER BY name" ;
//$statement = $pdo->query($query);
//$tab = $statement->fetchAll();

//var_dump($tab);


