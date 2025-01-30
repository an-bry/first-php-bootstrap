<?php
include 'db.php';
$id=$_GET['id'];
$sql="DELETE FROM information WHERE id=:id";
$requete=$connexion->prepare($sql);
$requete->bindParam(':id',$id);
$requete->execute();
if($requete){
    header("location: index.php?msg= Deleted successfully");
}
else 
echo "Failed";
?>