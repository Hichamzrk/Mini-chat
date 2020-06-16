
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
       <link rel="stylesheet" type="text/css" href="chat.css">
   </head>

   <body>
		<article>
			
			<div>
				<?php 
				//Affichage des messages et des pseudo stocké dans la base donnée
						while ($donnees = $message->fetch()) {
					 ?>

					 	<p>
					 		<img src="./image/avatar.png">
					 		<strong><?php echo htmlspecialchars($donnees['pseudo']);?></strong>  <br>
					 		<?php echo htmlspecialchars($donnees['message']);?> <br>
							<em><?php echo htmlspecialchars($donnees['heure']);?></em> 
					 	</p>
					<?php
					}
				?>
			</div>
		  
		   	<form method="post" action="formulaire.php">
	
			   	 <input type="text" placeholder="pseudo" name="pseudo"required="required"> 
			   	 <textarea style="resize: none;" name="message" required placeholder="message"> </textarea> 
			   	<input type="submit" name="envoyer" value="Go">

			</form>
			
		
		</article>
   </body>
</html>
