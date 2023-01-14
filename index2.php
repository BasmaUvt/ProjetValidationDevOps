<?php
//session_start();
//if (!$_SESSION['password']){
  //  header('Location: login.php');
//}
?>
<!DOCTYPE html>
<html lang="fr">
	<title> inscription </title>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style_contact.css">
<style>
  a{
    color: purple;
    size: 20;
  }
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
    
    <nav>
		<ul>
			
			<li><a href="index.html"> home </a></li>
			<li><a href="planning.html"> planning </a></li>
			<li><a href="contact.html"> contact </a></li>
			<li><a href="login.php"> connexion </a></li>
		</ul>
	</nav>

  <a href="membres.php"> Afficher tous les membres </a>
</body>
</html>