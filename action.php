<?php

  if(isset($_POST['valider']))
  {
  	if(isset($_POST['user_name']) AND isset($_POST['user_message']))
  	{
  		if(!empty($_POST['user_name']) AND !empty($_POST['user_message']))
  		{
           $name=htmlspecialchars($_POST['user_name']);
           $message=htmlspecialchars($_POST['user_message']);
 
             
             echo "<h2> Nom <strong><b> $name </b></strong></br>Commentaire: </br> $message </h2>";
  		}
  	}
  }

?>
<?php
 
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $dbname ="avis";
    try {
        $newDB=new PDO ("mysql:host=$host;dbname=$dbname",$user ,$pwd);
            echo"conection resussite";
    } catch (PDOException $e) {
        die('Erreur :' $e->getMesssage());
    }
?>

