<?php

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    include "./oop/dbh_class.php";
    include "./oop/add_member_class.php";
    
    $addMember = new addMember(); // Make sure class name matches your implementation
    $addMember->setMember($name, $gender, $age, $contact);
} 
if (isset($_SESSION['membermsg'])){
    ?>
    <div id="message" style="position:absolute;margin-top:-400px; color:green;border:2px solid black;"><h5>Member added</h5></div>
    <?php
    unset($_SESSION['membermsg']); }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Add Hostel Member</title>
</head>
<body>
    <?php     include "header.php";
?>

    
    <div class="container" style="margin-top:140px!important;">
    
        <h1>Add Hostel Member</h1>
        <form class="signup-form" action="add_member.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
            <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            
            <label for="room">Contact No:</label>
            <input type="text" id="room" name="contact" required>
            
            <button type="submit" name="submit" class="submit" style="margin-top: 15px;">Sign Up</button>
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
</script>
</html>
