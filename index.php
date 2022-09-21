<?php
session_start();
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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" class="mb-3" method="POST">
        <input type="text" name="email" class="form-control w-1=25 mt-1" id="email" placeholder="Enter Your Email">
        <input type="password" name="password" class="form-control w-1=25 mt-1 " id="password" placeholder="Enter Your password">
        <button type="submit" class="btn btn-primary m-3">Submit</button>
    </form>


    <?php

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($email== 'suwasdanuwar19@gmail.com' && $password == 'subash123'){
                $_SESSION['user']= true;
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