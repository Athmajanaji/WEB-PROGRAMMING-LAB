<?php 
include('functions.php');
if(isset($_POST['register'])){
    extract($_POST);
    register($username,$password,$name,$contact,$email,$department,$category,$id,$con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        background-color: #CFFFDC;
        font-family: 'Sacramento', cursive;
    }
    form{
        padding: auto;
        text-align:center;
    }
    input[type=text]{
        width:100%;
    }
    input[type=mail]{
        width:100%;
    }
    input[type=number]{
        width:100%;
    }
    input[type=password]{
        width:100%;
    }
    input{
        padding: 15px;
        text-align:center;
        border: 2px black solid;
        border-radius:30px;
    }
    input[type=submit] {
      border: 1px solid tomato;
      color: #fff;
      background: tomato;
      padding: 10px 20px;
      border-radius: 3px;
    }
    input[type=submit]:hover {
          border: 1px solid #81bc06;
          background: #81bc06;
    }
    a{
        color:black;
    }
    a:link{
        text-decoration: none;
    }
    .form{
          position: absolute;
          left: 600px;
          top: 10px;
    }
    .custom-select{
        display:inline;
    }
</style>
</head>
<body>
    <div class="form">
    <form method="POST">
    <h1>User Registration</h1>
        <input type="text" name="name" placeholder="Enter Your Name" required><br><br>
        <input type="number" name="contact" placeholder="Contact" required><br><br>
        <input type="mail" name="email" placeholder="Email" required><br><br>
    <div class="custom-select" style="width:200px;">
    &nbsp; &nbsp; &nbsp;
    <select name="category" required>
        <option value="0">Choose Category</option>
        <option value="Student">Student</option>
    </select>
    <select name="department" required >
        <option value="0">Choose Department</option>
        <option value="MCA">MCA</option>
        <option value="MBA">MBA</option>
        <option value="M.Tech">M.Tech</option>
        <option value="B.Tech">B.Tech</option>
    </select><br><br>
    </div>
        <input type="text" name="id" placeholder="ID" required><br><br>
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="password" name="password" placeholder="Repeat Password" required><br><br>
        <input type="submit" name="register" value="register" ><br><br>
    </form><br>
    
</div>
</body>
</html>