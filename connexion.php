<?php
$usr="root";
$mdp="";
$db="cred";
$server="localhost";

$link=mysqli_connect($server,$usr,$mdp,$db);
if ($link)
{
	echo("connexion établie");

}
else{
	die(mysqli_connect_error());
}

$people = array();
$link=mysqli_connect($server , $usr , $mdp , $db);
$req = mysqli_query($link , "SELECT * FROM cred ");
if (mysql_num_rows($req))
{
    //include "autho.html";
    while ($row = mysql_fetch_assoc($query)){
        $people[]=$row;
    }
    $json=json_encode($people);
    echo $json;
}
else error;

?>
<!DOCTYPE html>

<html lang="fr">

<body>
    

<form action="" method="post">
    <fieldset>
        <legend>connexion</legend>
        
    
        <label> username</label><input type="text" id="username" name="username" placeholder="votre login ici"/><br>
        <label> password</label><input type="password" id="password" name="password" placeholder="votre mot de passe ici"/><br>
        
        <button type="submit" name = "connecter">se connecter</button> 
        </fieldset>
</form>

</body>
</html>