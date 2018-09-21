<?php
include('divers/divers.php');
include('header.php');
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', $mdp);
}

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$pseudo = $_POST['pseudo'];

$req = $bdd->query('SELECT * FROM member WHERE pseudo = "'.$pseudo.'" LIMIT 1');
$check_Connect = $req->fetch();


  if(isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['password']) AND !empty($_POST['password']))
  {
    $isPasswordCorrect = password_verify($_POST['password'], $check_Connect['pass']);
    if (($_POST['pseudo'] = $check_Connect['pseudo']) AND $isPasswordCorrect)
    {
      session_start();
      $_SESSION['id'] = $check_Connect['id'];
      $_SESSION['pseudo'] = $pseudo;
      header('Location: index.php');
    }
    else
    {
      echo 'Mauvais identifiant ou mot de passe ! <a href="login.php">Cliquez ici</a> pour réessayer !';
    }
  }



include('footer.php');
?>
