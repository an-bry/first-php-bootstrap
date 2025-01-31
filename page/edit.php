<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap5.3.2/css/bootstrap.min.css">
    <title>php advanced crud Application</title>
</head>
<body>
    <nav class="navbar navbar-dark justify-content-center fs-3 mb-5"style="background-color:orange;">
        php advanced crud
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit user information</h3> 
            <p class="text-muted">click update after changing any information </p>
        </div>
        <?php 
        include "db.php";
        $id=$_GET['id'];
       $requete=$connexion->prepare(
        "SELECT * FROM information WHERE id=:id LIMIT 1"
       );
    $requete->bindParam(':id',$id,PDO:: PARAM_INT);
       $requete->execute();
       $resultat=$requete->fetch();
      
        ?>
       

        <div class=" container d-flex justify-content-center">
            <form action=""method="post"style="width=50vw;min-width:300px; ">
                <div class="row mb-3" >
                    <div class="col">
                        <label for="" class="form-label">First name</label>
                        <input type="text" class="form-control" name="first_name" value="<?php print_r($resultat['first_name']);?>">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">last name</label>
                        <input type="text" class="form-control" name="last_name" value="<?php print_r($resultat['last_name']);?>">
                    </div>
            <div class="mnb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text"name="email" class="form-control" value="<?php print_r($resultat['email'])?>">
            </div>
                </div>
                <div class="form-group mb-3">
                    <label for="male" class="label group">Male</label>
                    <input type="radio" class="form-check-input"name="gender" id="male" value="male"<?php print_r($resultat['gender']=='male')?
                    "checked":"";?>>
                    <label for="female" class="label group">female</label>
                    <input type="radio" class="form-check-input"name="gender" id="female" value="female"<?php print_r($resultat['gender']=='female')?
                    "checked":"";?> >
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include "db.php";
$id=$_GET['id'];
echo $id;
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
        "UPDATE `information` SET `first_name`='$first_name',
        `last_name`='$last_name',`email`='$email' ,`gender`='$gender' WHERE id=$id"
    );
    $requete->execute();
    if($requete){
        echo"reussie";
    }
    else echo"failed";
}
?>
</html>