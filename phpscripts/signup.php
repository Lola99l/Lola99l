<?php
include('conn.php');

$username = $_POST['Username'];
$fullname = $_POST['fullName'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$wormg = false;

if($username=='') {
    echo "<script>alert('Please enter in a username.');</script>";
    echo "<script>window.location.href='../sign.html'</script>";
    $wormg = true;
} else {
    // Check if username already exists in the database
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username already exist');</script>";
        echo "<script>window.location.href='../sign.html'</script>";
    }
    $wormg = true;
}
if($fullname=='') {
    echo "<script>alert('Please enter in a your fullname.');</script>";
    echo "<script>window.location.href='../sign.html'</script>";
    $wormg = true;
}


if($email=='') {
    echo "<script>alert('Please enter in a email. ');</script>";
    echo "<script>window.location.href='../sign.html'</script>";
    $wormg = true;
} else {
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Enter a vaild email. ');</script>";
        echo "<script>window.location.href='../sign.html'</script>";
    } else {
        
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) {
            echo "<script>alert('Email already exist. ');</script>";
            echo "<script>window.location.href='../sign.html'</script>";
        }
    }
    $wormg = true;
    
}

if($password=='') {
    echo "<script>alert('Please Enter a password ');</script>";
    echo "<script>window.location.href='../sign.html'</script>";
    $wormg = true;
} else {
    
    if(strlen($password) < 8) {
        echo "<script>alert('Password must be at least 8 characters long');</script>";
        echo "<script>window.location.href='../sign.html'</script>";
    }
    $wormg = true;
}


    
    $query = "INSERT INTO users (username, email, Password,fullname) VALUES ('$username', '$email', '$password','$fullname')";
    mysqli_query($conn, $query);

    echo "<script>alert('Account created sussecfully');</script>";
    echo "<script>window.location.href='../sign.html'</script>";



?>
