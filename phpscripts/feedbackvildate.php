<?php

include('conn.php');

$gender = $_POST['gender'];
$age = $_POST['age'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$phNum = $_POST['phNum'];
$LOS = $_POST['LOS'];
$COS = $_POST['COS'];
$satisfied = $_POST['satisfied'];
$Helpful = $_POST['Helpful'];
$foundUs = $_POST['foundUs'];
$recommend = $_POST['recommend'];
$suggestions = $_POST['suggestions'];


if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
    //echo $gender ;
}

if(isset($_POST['age'])){
    $age = $_POST['age'];
    //echo $age ;
}
if(isset($_POST['fName'])){
    $fName = $_POST['fName'];
    //echo $fName ;
}
if(isset($_POST['lName'])){
    $lName = $_POST['lName'];
    //echo $lName ;
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
    //echo $email ;
}
if(isset($_POST['phNum'])){
    $phNum = $_POST['phNum'];
    //echo $phNum ;
}
if(isset($_POST['LOS'])){
    $LOS = $_POST['LOS'];
    //echo $LOS;
}
if(isset($_POST['COS'])){
    $COS = $_POST['COS'];
    //echo $COS ;
}
if(isset($_POST['satisfied'])){
    $satisfied = $_POST['satisfied'];
    //echo $satisfied ;
}
if(isset($_POST['Helpful'])){
    $Helpful = $_POST['Helpful'];
    //echo $Helpful ;
}
if(isset($_POST['foundUs'])){
    $foundUs = $_POST['foundUs'];
    //echo $foundUs ;
}
if(isset($_POST['recommend'])){
    $recommend = $_POST['recommend'];
    //echo $recommend ;
}
if(isset($_POST['suggestions'])){
    $suggestions = $_POST['suggestions'];
    //echo $suggestions ;
}


if($gender == 'Male'){
    $gender = 'M';
}else{
    $gender = 'F';
}
session_start();
$id = $_SESSION['id'];


$query = "UPDATE users SET Gender='$gender', Age='$age', Fname='$fName', Lname='$lName', Email ='$email', Phone_no='$phNum'
, Level_of_study='$LOS', Country='$COS', Level_of_sat='$satisfied', Most_helpfull_page='$Helpful', How_found_us='$foundUs'
, Would_recommend='$recommend', Suggestion_for_improvment='$suggestions' WHERE ID='$id'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('The Feedback Submited Sueecssflly.');</script>";
    echo "<script>window.location.href='../index.html'</script>";
} else {
    echo "<script>alert('Can't upload the data');</script>";
    echo "<script>window.location.href='../index.html'</script>";
}

?>