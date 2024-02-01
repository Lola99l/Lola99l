<?php

session_start();
if(!isset($_SESSION['username'])){
    header("Location: sign.html");
}else{
    header("Location: index.html");
}

?>