<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server,$username,$password,$database, 3306);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['register'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $number= $_POST['phone_no'];
    $password= $_POST['password'];

    $sql= "INSERT INTO `users`(`name`, `email`, `phone_no`, `password`) VALUES  ('$name','$email','$number','$password')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    }else{
        echo "ERROR: Not able to execute $sql. ". mysqli_error($conn);
    }
}

/*
session_start();
    if(isset($_POST['Login'])){
        $email= $_POST['email'];
        $password= $_POST['password'];

        $query= "SELECT * FROM users WHERE `email`= '$email' AND `password`='$password'";
        $result= mysqli_query($conn,$query);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_fetch_row($result)==1){
            header("location: index.php");
        }else{
            echo "email id or password is incorrect";
        }
    }
*/
    if(isset($_POST['job'])){
        $cname= $_POST['cname'];
        $pos=$_POST['pos'];
        $Jdesc=$_POST['Jdesc'];
        $skills=$_POST['skills'];
        $CTC=$_POST['CTC'];

        $sql="INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
        if(mysqli_query($conn,$sql)){
            echo "New Job Posted";
        }else{
            echo "ERROR: Failed to Post the Job $sql. ". mysqli_error($conn);
        }
    }

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $apply=$_POST['apply'];
        $qual=$_POST['qual'];
        $year=$_POST['year'];

        $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
        mysqli_query($conn,$sql);
    }

?>