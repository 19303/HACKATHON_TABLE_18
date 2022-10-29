<?php include 'connection.php'?>
<?php
echo "hello";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $fullName = $_REQUEST['fullName'];
        $email = $_REQUEST['email'];
        $phoneNumber = $_REQUEST['phoneNumber'];
        $dataOfBirth = $_REQUEST['dataOfBirth'];
        $password = $_REQUEST['password'];
        $checkPassword = $_REQUEST['checkPassword'];
        $query = "INSERT INTO `reg_details` VALUES ('$fullName', '$email', '$phoneNumber', '$dataOfBirth', '$password', '$checkPassword')";
        $res = mysqli_query($conn,$query);
        header('location:login.html');
        
    }
    
?>