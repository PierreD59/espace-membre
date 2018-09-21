<?php
include('header.php');
?>

<div class="row m-auto">

<form  class="border border-success mx-auto col-4 my-5 rounded text-center" method="post" action="register_post.php">
<p class="text-center font-weight-bold">Register</p>
<label class="ml-5 " for="pseudo">Pseudo</label>
<input id="pseudo" type="text" name="pseudo" placeholder="Toto" required><br/>
<label class="ml-2" for="password">Mot de passe </label>
<input id="password" type="password" name="password" required><br />
<label class="ml-2" for="email">E-mail </label>
<input id="email" type="email" name="email" placeholder="toto@gmail.com" required><br />
<label class="ml-2" for="confirmEmail">Confirmation E-mail </label>
<input id="confirmEmail" type="email" name="confirmEmail" placeholder="toto@gmail.com" required><br />

<button type="submit" class="btn btn-success ml-5 my-3">Submit</button>
</form>
</div>

<?php
include('footer.php');
?>
