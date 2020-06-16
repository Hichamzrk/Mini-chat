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
//requete préparer stockant les pseudos et messanges dans la base de donnée  
  $req = $bdd->prepare('INSERT INTO Message (pseudo, message) VALUES(?, ?)');
  $req->execute(array(
      $_POST['pseudo'],
      $_POST['message']
  ));


header('location: index.php');
?>