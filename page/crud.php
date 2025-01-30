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
            <h3>add new user</h3> 
            <p class="text-muted">complete the form below to add new user</p>
        </div>
        <div class=" container d-flex justify-content-center">
            <form action=""method="post"style="width=50vw;min-width:300px; ">
                <div class="row mb-3" >
                    <div class="col">
                        <label for="" class="form-label">First name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="einstein">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">last name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Albert">
                    </div>
            <div class="mnb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text"name="email" class="form-control" placeholder="alberteinstein@gmail.com">
            </div>
                </div>
                <div class="form-group mb-3">
                    <label for="male" class="label group">Male</label>
                    <input type="radio" class="form-check-input"name="gender" id="male" value="male">
                    <label for="female" class="label group">female</label>
                    <input type="radio" class="form-check-input"name="gender" id="female" value="female">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
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