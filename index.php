<?php


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body> 
    <div class="container mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" class="mb-3 border p-5" method="POST">
            <input type="text" name="email" class="form-control w-1=25 mt-1" id="email" placeholder="Enter Your Email"><br>
            <input type="password" name="password" class="form-control w-1=25 mt-1 " id="password" placeholder="Enter Your password"><br>
            <button type="submit" class="btn btn-primary m-3">Submit</button>
        </form>
    </div>


    <?php

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $db_email = 'suwasdanuwar19@gmail.com';
            $db_password = 'subash123';

            if($email== $db_email && $password == $db_password){
               setcookie("email",$email, time()+ 10, "/" );
                header('location: welcome.php');       
            }
            else{
                echo "invalid email or password";
            }
        }
      ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>