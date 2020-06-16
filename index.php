
<?php 
//Connexion à la base de donnée 
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8' ,'root',  'root');
?>

<?php
//affichage des erreurs
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<?php
$message = $bdd->query('SELECT * FROM Message ORDER BY ID DESC LIMIT 0, 5')
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Mini chat</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>

   <body>
   	
   	<form method="post" action="formulaire.php">
	   	<p>	
	   		Insére ton pseudo : <input type="text" name="pseudo"required="required"> <br />
	   		Insére ton message : <textarea name="message"required> </textarea> <br>
	   		<input type="submit" name="envoyer" >
	   	</p>
	</form>
	<button type="button" name="refresh" onclick="history.go (0)">Refresh</button>
	<?php 
	//Affichage des messages et des pseudo stocké dans la base donnée
		while ($donnees = $message->fetch()) {
	 ?>
	 	<p><strong>Pseudo : </strong> <?php echo htmlspecialchars($donnees['pseudo']);?> , <strong>Message :</strong> <?php echo htmlspecialchars($donnees['message']);?></p>
	<?php
	}

	$reponse->closeCursor(); // Termine le traitement de la requête

	?>
   </body>
</html>
