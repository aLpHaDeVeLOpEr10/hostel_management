<?php
    include "./oop/dbh_class.php";

if (isset($_POST['submit'])) {
    $Visitor_name = $_POST["name"];
    $Member_name = $_POST['Member_name'];
    $check_in = $_POST['check_in'];
    include "./oop/add_member_class.php";
    $addMember = new addVisitor(); // Make sure class name matches your implementation
    $addMember->setVisitor($Visitor_name, $Member_name, $check_in);
} 
if (isset($_SESSION['visitormsg'])){
  ?>
  <div id="message" style="position:absolute;margin-top:-430px; color:green;border:2px solid black;"><h5>Member added</h5></div>
  <?php
  unset($_SESSION['visitormsg']); }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Visitor</title>
  
</head>
<body>
    <?php     include "header.php";
?>

    <div class="container" style="margin_top:275px!important;">
        <h1>Add Visitor</h1>
        <form class="signup-form" action="visitor.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
          
    <label for="room-number">To Meet:</label>
    
    <?php 

    include "./oop/get_member_class.php"; 

       $getMember = new getMember(); // Make sure class name matches your implementation
       $members= $getMember->showMember();
   ?>

      <select id="room-number" name="Member_name" required>
        <option value="">Select Member</option>
        <?php foreach ($members as $member) : ?>
        <option value="<?php echo $member['Name']; ?>"><?php echo $member['Name']; ?></option>
       
        <?php endforeach; ?>
      </select>
            
      <label for="datetimepicker">Check In: </label>
<input type="text" name="check_in"id="datetimepicker">
            
            
            
            <button type="submit" name="submit" class="submit" style="margin-top: 15px;">Add</button>
        </form>
    </div>
   
<script>
  $(document).ready(function() {
    $("#datetimepicker").datetimepicker({
      dateFormat: 'yy-mm-dd',
      timeFormat: 'HH:mm:ss',
      showSecond: true,
      stepHour: 1,
      stepMinute: 2,
      stepSecond: 10
    });
   

    // Wait for 2 seconds and then remove the message
    setTimeout(function() {
        $('#message').fadeOut('slow', function() {
            $(this).remove();
        });
    }, 1000); // 2000 milliseconds = 2 seconds
});
</script>
</body>
</html>
