<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '4zgtxmlm59');
}

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];

if(isset($pseudo) AND !empty($pseudo) AND isset($pwd) AND !empty($pwd) AND isset($email) AND !empty($email)) {
$req = $bdd->prepare('INSERT INTO member(pseudo, pass, email, date_registration) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(

    'pseudo' => $pseudo,
    'pass' => $pwd,
    'email' => $email
  ));
}

echo "Vous êtes inscrit !";















?>
