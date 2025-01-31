
<?php
include "db.php";
if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
     if($gender=='male'){
        $gender='male';
     }
     elseif($gender=='female'){
        $gender='female';
     }
    $requete=$connexion->prepare(
        "INSERT INTO information(first_name,last_name,email,gender)
    VALUES(:first_name,:last_name,:email,:gender)"
    );
   $requete->bindParam(':first_name',$first_name);
     $requete->bindParam(':last_name',$last_name);
     $requete->bindParam(':email',$email);
     $requete->bindParam(':gender',$gender);
    $requete->execute();
          
}
?>

</html>