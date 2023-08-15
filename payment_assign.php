<?php    

    include "./oop/dbh_class.php";

if (isset($_POST['submit'])) {
    $Member_id1 = $_POST["Member_id"];
    $invoice = uniqid() . time() . mt_rand(100, 999); 
    $ammount = $_POST['ammount'];
    $status_id = $_POST['status_id'];
    include "./oop/Assign_bed_class.php";
    
    $assignBill = new assignBill(); // Make sure class name matches your implementation
    $assignBill->addBill($Member_id1, $invoice, $ammount, $status_id);
    
} 
if (isset($_SESSION['billmsg'])){
  ?>
  <div id="message" style="position:absolute;margin-top:-420px; color:green;border:2px solid black;"><h5>Payment Sucess</h5></div>
  <?php
  unset($_SESSION['billmsg']); }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<title>Add payment</title>
</head>
<body>
<?php     include "header.php";
?>
  <div class="container">

    <h1>Add payment</h1>
    <form class="signup-form" action="payment_assign.php" method="POST">


    <label for="room-number">Member Name:</label>
    <?php     include "./oop/get_member_class.php"; 

       $getMember = new getMember(); // Make sure class name matches your implementation
       $members= $getMember->showMember();
   ?>

      <select id="room-number" name="Member_id" required>
        <option value="">Select Member</option>
        <?php foreach ($members as $member) : ?>
        <option value="<?php echo $member['Member_id']; ?>"><?php echo $member['Name']; ?></option>
       
        <?php endforeach; ?>
      </select>
     
            <label for="room">Ammount:</label>
            <input type="text" id="age" name="ammount" required>
            <label for="room">Status:</label>

            <select id="room-number" name="status_id" required>
        <option value="">Status</option>
       
      
        <option value="0">pending</option>
        <option value="1">Approved</option>
      </select>
      <button type="submit" name="submit" class="submit" style="margin-top: 15px;">Submit</button>
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
