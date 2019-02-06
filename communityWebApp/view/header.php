<?php
   if ( !isset($_SESSION['Email']) ) {
       header("location:loginform.php");
   }
   $first_name = $_SESSION['Firstname'];
   $last_name = $_SESSION['Lastname'];
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
  <title>The Utah County Event Tracker</title>
  <link rel="stylesheet" type="text/css" href="/assign7/styles.css">
</head>

<!-- the body section -->
<body>
Welcome <?=$first_name?> <?=$last_name?>
<header><h1>The Utah County Event Tracker</h1> </header>
