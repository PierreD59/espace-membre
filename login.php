<?php
include('header.php');
?>

<div class="row m-auto">

<form  class="border border-success mx-auto col-4 my-5 rounded " method="post" action="admin.php">
<p class="text-center font-weight-bold">Connexion</p>
<label class="ml-5" for="pseudo">Pseudo</label>
<input id="pseudo" type="text" name="pseudo" value="" required><br/>
<label class="ml-2" for="password">Mot de passe </label>
<input id="password" type="password" name="password" required><br />

<button type="submit" class="btn btn-success ml-5 my-3">Submit</button>
</form>
</div>

<?php
include('footer.php');
?>
