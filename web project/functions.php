<?php 
include('config.php');
function login($username,$password,$con){
    $qry="select * from users where username='$username' and password='$password'";
    $sql=mysqli_query($con,$qry);
    $count=mysqli_num_rows($sql);
    if($count==1){
        $row1=mysqli_fetch_array($sql);
        $_SESSION['name']=$row1['username'];
        header('location: home.php');
    }
}

function register($username,$password,$name,$contact,$email,$department,$category,$id,$con){
    $qry="INSERT INTO `users` (`name`, `username`, `password`, `category`, `department`, `email`, `contact`, `id`) VALUES ('$name', '$username', '$password', '$category', '$department', '$email', '$contact', '$id');";
    $sql=mysqli_query($con,$qry);
    header('location: index.php');
}
?>