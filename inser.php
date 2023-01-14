<?php
include "connexion.php";
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["number"]) && isset($_POST["mail"]) && isset($_POST["gender"]))
{
    
    $nom= $_POST["nom"];
    $prenom= $_POST["prenom"];
    $number= $_POST["number"];
    $mail= $_POST["mail"];
    $sexe= $_POST["gender"];

    $req= "insert into membre (nom,prenom,tel,mail,sexe) values('$nom','$prenom','$number','$mail','$sexe')";
$res =mysqli_query($link,$req);
    if ($res)
{
    echo"insertion effectuée";

}
else
{
    echo "erreur d'insertion";
}
}
?>