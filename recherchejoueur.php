
<?php
include"base.php";
include"joueurs.php";
$nom=$_POST['nom'];

$req = $bdd->query("SELECT Name FROM joueurs WHERE  Name ='$nom'");

if($req->fetch()) {
?>
 <a href=""><?php echo $nom; ?></a>
 <?php
}
else {
echo "Joueur introuvable";
 }

?>
