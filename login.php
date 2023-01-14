<?php
session_start();
if (isset($_POST['connecter'])){
    if(!empty($_POST['username']) AND !empty($_POST['password'])){
$pseudo_par_defaut = "admin";
$mdp_par_defaut = "admin";
$pseudo_saisi = htmlspecialchars($_POST['username']);
$mdp_saisi = htmlspecialchars($_POST['password']);
if($pseudo_saisi = $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
$_SESSION['passwor'] = $mdp_saisi ;
header('Location: index2.php');
}else{
    echo "votre username ou password est incorrect";
}
    }else {
        echo " veuillez entrer tous les champs";
    }
}
?>
<!DOCTYPE html>

<html lang="fr">
	<title> adminstration </title>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style_contact.css">
<style>
    label {
        width : 20%
        display: inline-block;
        text-align:left;
        
    }
    body {
        width : 50%;
        font-family : arial;
        margin : 5px auto;
        background : #f4f7f4 ;
        padding : 20px ;
        color : purple ;

    }

    fieldset{
        border-radius : 40 px ;
        
    }
    legend{
        font-size : 1.4em;
        margin-bottom : 10px;
    }
    input [type="text"], input [type="number"], input [type="email"]
    {
        border-radius : 20px;
        padding : 10px;
        width : 70%;
        background-color : #ffff;
        margin: 10 px;
    }
    input[type="submit"]{
        position: relative;
        padding: 20px;
        font-size: 10px;
        border: 1px solid purple;
        border-radius: 2px;
        margin-top: 10px;
        width: 100%;
        font-size: 18px;
        font-style: bold;
        color: black ;

    }

</style>	
	
		
</head>
<body>
    <!--nav-->
	
	<nav>
		<ul>
			
			<li><a href="index.html"> home </a></li>
			<li><a href="planning.html"> planning </a></li>
			<li><a href="contact.html"> contact </a></li>
            <li><a href="login.php"> connexion </a></li> 
		</ul>
	</nav>

<form action="" method="post">
    <fieldset>
        <legend>Adminstration</legend>
        
    
        <label> username</label><input type="text" id="username" name="username" placeholder="votre login ici"/><br>
        <label> password</label><input type="password" id="password" name="password" placeholder="votre mot de passe ici"/><br>
        
        <button type="submit" name = "connecter">se connecter</button> 
        </fieldset>
</form>

</body>
</html>