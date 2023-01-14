<?php
    $bdd =  new PDO('mysql:host=localhost;dbname=projet;','root', '');

?>
<!DOCTYPE html>
<html>
    <head>
        <title> afficher les membres </title>
        <meta charset="utf-8">
        <html lang="en">
	

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style_contact.css">
<style>
    
    body {
        width : 50%;
        font-family : arial;
        margin : 5px auto;
        background : #f4f7f4 ;
        padding : 20px ;
        color : purple ;

    }
    title{
        width : 50%;
        font-family : arial;
        margin : 5px auto;
        background : #f4f7f4 ;
        padding : 20px ;
        color : purple ; 
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
  <?php
  $recupUsers = $bdd->query('SELECT * FROM membre');

  while($user = $recupUsers->fetch())
  {
 
      ?>
      <p><?= $user['nom'] ; ?> <?= $user['prenom'] ; ?>
      <!--<a href="gestion.php?id=<?= $user['id']; 
      ?>" style="color:red;text-decoration: none;">voir le membre</a></p>-->
      
      <?php
  }  
  ?>
</body>
</html>