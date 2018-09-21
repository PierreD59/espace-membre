<?php
include('header.php');
?>

<div class="row m-auto">

<form  class="border border-success mx-auto col-4 my-5 rounded " method="post" action="login_post.php">
<p class="text-center font-weight-bold">Connexion</p>
<label class="ml-5" for="pseudo">Pseudo</label>
<input id="pseudo" type="text" name="pseudo" value="" required><br/>
<label class="ml-2" for="password">Mot de passe </label>
<input id="password" type="password" name="password" required><br />
<input type="checkbox" id="auto_connection" name="auto_connection" value="auto_connection" checked />
<label for="auto_connection">Connexion Automatique</label>

<button type="submit" class="btn btn-success ml-5 my-3">Submit</button>
</form>
</div>
<p class="text-center mb-5">Pas encore inscrit ? <a href="register.php">Cliquez ici</a>

<?php
include('footer.php');
?>
