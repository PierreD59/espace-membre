<?php
include('divers/divers.php');

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', $mdp);
}

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
$pseudo = htmlspecialchars($_POST['pseudo']);
$email = htmlspecialchars($_POST['email']);

if(isset($pseudo) AND !empty($pseudo) AND isset($pwd) AND !empty($pwd) AND isset($email) AND !empty($email) AND preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
{
  if($_POST['email'] == $_POST['confirmEmail'])
  {
    $req = $bdd->prepare('INSERT INTO member(pseudo, pass, email, date_registration) VALUES(:pseudo, :pass, :email, CURDATE())');
    $req->execute(array(

    'pseudo' => $pseudo,
    'pass' => $pwd,
    'email' => $email
    ));

    echo "Vous êtes inscrit ! <a href='login.php'>Cliquez ici</a> pour vous connecter !";
  }
  else {
    echo 'Il y a une erreur, <a href="register.php">réessayez !</a>';
  }
}
else {
  echo 'Il y a une erreur, <a href="register.php">réessayez !</a>';
}


?>
