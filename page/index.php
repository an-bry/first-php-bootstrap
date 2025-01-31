<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" rel="stylesheet">
    <title>php advanced crud Application</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<body>
    <!-- Button trigger modal -->
                                          <!-- 
    ===================================================================================
                                           Modal 
    ===================================================================================                                       
                                           -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit"<?php include 'crud.php'?> >Save</button>
                </div>
            </form>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
    <nav class="navbar navbar-dark justify-content-center fs-3 mb-5"style="background-color:orange;">
        php advanced crud
    </nav>
    <div class="container mb-3">
    <button type="button" class="btn btn-dark   " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add new
</button>
        </div>
       <!-- ======================================================================== 
                                   fin modal
       ========================================================================-->
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

                        <a href="edit.php?id=<?php  
                    
                        
                        
                        echo $row['id'] ?>" class="link-dark  " style="color:black;"> 
                             <i class="fa-solid fa-pen-to-square fs-5 me-3" ></i> 
        
                        <!-- </a> -->
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-red " style="color:red;">
                           <i class="fa-solid fa-trash fs-5"></i>
                        </a>
                    </td>
                </tr>
                        <?php
                     }

                       ?>
                       <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel2">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </tbody>

        </table>
</body>
</html>
