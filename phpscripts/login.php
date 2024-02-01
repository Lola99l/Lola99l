<?php
include('conn.php');

$username = $_POST['UsernameL'];
$password = $_POST['PasswordL'];
       
if($username=='' || $password=='') {
    echo "<script>alert('Please type in The Username And password.');</script>";
    echo "<script>window.location.href='../sign.html'</script>";
} else {
            
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 1) {
                
$user = mysqli_fetch_assoc($result);

                
if($password == $user['Password']) {           
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $user['ID'];
    header("Location: ../index.html"); 
} else {
    echo "<script>alert('Incorrect username or password, please try again');</script>";
    echo "<script>window.location.href='../sign.html'</script>";
 }
}
}



    
?>
