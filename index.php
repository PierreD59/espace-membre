<?php
session_start();
include('header.php');

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{ ?>
    <p class="text-center">Bonjour <?= $_SESSION['pseudo']?>,<a href="disconnect.php"> cliquez ici</a> pour vous deconnecter</p>
<?php } ?>

<h1 class="text-center"> HOME </h1>

<?php
include('footer.php');
?>
