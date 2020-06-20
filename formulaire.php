<?php  
	session_start();
?>

<?php

//connexion à la base de donné

  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

?>


<?php
//requete préparer stockant les pseudos et messanges dans la base de donnée  
  $req = $bdd->prepare('INSERT INTO Message (pseudo, message, avatar) VALUES(?, ?, ?)');
  $req->execute(array(
      $_SESSION['pseudo'],
      $_POST['message'],
      $_SESSION['avatar']
  ));


header('location: chat.php');
?>