<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','loginpage');
    if($conn->connect_error){
        die('Wrong Information Provided : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO registration(username, password)
            values(?,?)");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        echo "Logged In...";
        $stmt->close();
        $conn->close();
    }
?>