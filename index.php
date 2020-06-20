<?php 
	session_start()
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<style type="connexion.css"></style>
</head>
	<body>
		</html>
		
		 <form action="session.php" method="post">
		 	<input type="text" name="pseudo">
		 	<label for="avatar">
			 	<input type="radio" name="avatar" id="avatar">
			 	<img src="/image/avatar.png">
			</label>
			<label for="avatar2">
		 		<input type="radio" name="avatar" id="avatar2">
			 	<img src="/image/avatar2.png">
			</label>
		 	<input type="submit" name="envoyer">
		 </form>
	</body>
</html>