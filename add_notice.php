<?php

if (isset($_POST['submit'])) {
    $notice = $_POST["notice"];
    $notice_date = $_POST['notice_date'];
    include "./oop/dbh_class.php";
    include "./oop/Assign_bed_class.php";
    
    $addMember = new addNotice(); // Make sure class name matches your implementation
    $addMember->notice($notice, $notice_date);
} 
if (isset($_SESSION['addmsg'])){
    ?>
    <div id="message" style="position:absolute;margin-top:-400px; color:green;border:2px solid black;"><h5>Member added</h5></div>
    <?php
    unset($_SESSION['addmsg']); }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>Add Notice</title>
</head>
<body>
    <?php     include "header.php";
?>
      //changed
    <div class="container" >
        <h1>Add Notice</h1>
        <form class="signup-form" action="add_notice.php" method="POST">
            <label for="name">Notice:</label>
            <input type="text" id="name" name="notice" required> 
            <label for="age">Date:</label>
             <input type="text" name="notice_date" id="datepicker">

            
            <button type="submit" name="submit" class="submit" style="margin-top: 15px;">Add_notice</button>
        </form>
    </div>
</body>
<script>$(document).ready(function() {
    // Wait for 2 seconds and then remove the message
    setTimeout(function() {
        $('#message').fadeOut('slow', function() {
            $(this).remove();
        });
    }, 1000); // 2000 milliseconds = 2 seconds
});
$(function() {
      // Initialize the date picker
      $("#datepicker").datepicker();
    });
</script>
</html>
