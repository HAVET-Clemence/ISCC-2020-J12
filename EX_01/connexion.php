<?php
session_start();
if (isset($_SESSION["id"])){
    setcookie("id",  $_SESSION['id'], time() + 365*24*3600);
}

?>
<form name="formulaire" action="securite.php" method="post"> 
<input type="text" name="login" placeholder="login" />
<input type="password" name="password" placeholder="password" />
<input type="submit" value="Envoyer" />
</form>

