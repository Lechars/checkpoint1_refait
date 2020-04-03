<?php
include_once 'connecdeux.php';

$pdo = new \PDO(DSN, USER, PASS);

$query = "SELECT * FROM bribe ORDER BY name" ;
$statement = $pdo->query($query);
$tab = $statement->fetchAll();

?>


<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>
	  <table>
	    <thead>
	        <tr>
	            <th colspan="2">Al Capone's bribe</th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php
	    	foreach ($tab as $key ) {
	    		echo "<tr>";
	    		echo "<td>" . $key['name'] . "</td>";
	    		echo"<td>" . $key['payment'] . "</td>";
	    		echo"</tr>";
	    	}
	        ?>
	   		
	    </tbody>
	</table>
	</body>
</html>

<?php
$query = "SELECT SUM(payment)" ;
$statement = $pdo->query($query);
$somme = $statement->fetch();
var_dump($somme);
?>
