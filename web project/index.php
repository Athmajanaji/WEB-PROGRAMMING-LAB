<?php 
include('functions.php');
if(isset($_POST['login'])){
    extract($_POST);
    login($username,$password,$con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        background-color: #CFFFDC;
    }
    form{
        padding: auto;
        text-align:center;
    }
    input{
        padding: 10px;
        text-align:center;
        border: 2px black solid;
        border-radius:20px;
    }
    .form{
        position: relative;
        margin:200px 150px 200px 150px;
    }
    img{
        width: 100px;
        height:100px;
    }
    a{
        color:black;
    }
    a:link{
        text-decoration: none;
    }
</style>
</head>
<body>
    
    <div class="form">
    <form method="POST">
    <img src="user.png"><br><br>
        <input type="text" name="username" placeholder="username"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" name="login" value="Login"><br><br>
        <button type="button" class="btn btn-outline-success"><a href="registration.php">Sign Up</a></button>
    </form><br>
    
</div>
</body>
</html>