<?php
session_start();
?>
<DOCTYPE! html>
<html>
<head>
<meta charset="utf-8"/>
<title>mini-site-routing</title>
</head>
<body>
<header>
    <nav>
        <a href = "mini-site-routing.php?page=1">Accueil</a>
        <a href = "mini-site-routing.php?page=2">Page 2</a>
        <a href = "mini-site-routing.php?page=3">Page 3</a>
        <a href = "admin.php">Page 3</a>
    </nav>
</header>
<?php
foreach($_GET as $key => $value){
    
    if ($key == "page" && $value == 1){
        echo "<h1>Accueil !</h1>";}
    if ($key == "page" && $value == 2){
            echo "<h1>Page 2 !</h1>";}
    if ($key == "page" && $value == 3){
                echo "<h1>Page 3 !</h1>";
    }
    if ($_GET ["page"]=="connexion"){
        include ("connexion.php");
    }
   }
   if (isset($_SESSION["id"])){
    echo "<p>Login : ".$_SESSION["id"]. "</p>";

}
else {
   if (isset($_COOKIE["id"])){
       $_SESSION["id"]=$_COOKIE["id"];
   }
   else{
       header("Locaion: connexion.php");
       exit();
   } 
}
?>
</body>
</html>

