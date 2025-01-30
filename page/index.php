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
    <div class="container mb-3">
        <?php
        if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
            echo'<div class="alert alert-warning alert-dismissible fade-show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button></div>';
        }
        ?>
        <a href="crud.php" class="btn btn-dark">Add New</a>
        </div>
        <table class="table table-hover text-center ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">last name</th>
                    <th scope="col">email </th>
                    <th scope="col">gender</th>
                    <th scope="col">Action</th>
                </tr>

            </thead>
            <tbody>
            <?php
            include "db.php";
        $requete=$connexion->prepare(
            "SELECT * FROM information" );
            $requete->execute();
                     while ($row=$requete->fetch()){
                        ?>
                        <tr>
                        <th ><?php  echo $row['id']?></th>
                    <th ><?php  echo $row['first_name']?></th>
                    <th ><?php  echo $row['last_name']?></th>
                    <th ><?php  echo $row['email']?></th>
                    <th ><?php  echo $row['gender']?></th>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-white btn btn-dark">
                            <!-- <i class="fa-solid fa-pen-to-square fs-5 me-3"></i> -->
                             modifier
                        </a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-white btn btn-danger">
                            <!-- <i class="fa-solid fa-trash fs-5 "></i> -->
                             supprimer
                        </a>
                    </td>
                </tr>
                        <?php
                     }

                       ?>
            </tbody>

        </table>
</body>
</html>
