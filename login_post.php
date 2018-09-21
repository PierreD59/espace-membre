<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '4zgtxmlm59');
}

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
$req->execute(array(

    'pseudo' => $pseudo));

$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base

$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);


if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
    }
}

?>
