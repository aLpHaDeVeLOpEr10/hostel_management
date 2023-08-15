<?php
include "./oop/dbh_class.php";
if (isset($_POST['submit'])) {
  $Member_id = $_POST["Member_id"];
  $room_no = $_POST['room_no'];
  $category = $_POST['category'];
  include "./oop/Assign_bed_class.php";
  $assignBed = new assignBed(); // Make sure class name matches your implementation
  $assignBed->addBed($Member_id, $room_no, $category);
}
if (isset($_SESSION['assignmsg'])) {
  ?>
  <div id="message" style="position:absolute;margin-top:-420px; color:green;border:2px solid black;">
    <h5>Bed Assigned</h5>
  </div>
  <?php
  unset($_SESSION['assignmsg']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Assign bed</title>
</head>
<body>
  <?php
  include "header.php";
  ?>
  <div class="container">
    <div id="message" style="position:absolute; color:green;"></div>
    <h1>Assign BedRoom</h1>
    <form class="signup-form" action="assign_bed.php" method="POST">
      <label for="room-number">Member Name:</label>
      <?php include "./oop/get_member_class.php";
      $getMember = new getMember(); // Make sure class name matches your implementation
      $members = $getMember->showMember();
      ?>
      <select id="room-number" name="Member_id" required>
        <option value="">Select Member</option>
        <?php foreach ($members as $member): ?>
          <option value="<?php echo $member['Member_id']; ?>"><?php echo $member['Name']; ?></option>
        <?php endforeach; ?>
      </select>
      <label for="room">Room No:</label>
      <input type="number" id="age" name="room_no" required>
      <label for="room-number">Category:</label>
      <select id="room-number" name="category" required>
        <option value="">Select Room</option>
        <option value="Bussiness">Bussiness</option>
        <option value="Standard">Standard</option>
        <option value="Low">Low</option>
        <!-- Add more room options here -->
      </select>
      <button type="submit" name="submit" class="submit" style="margin-top: 15px;">Assign Bed</button>
    </form>
  </div>
</body>
<script>$(document).ready(function () {
    // Wait for 2 seconds and then remove the message
    setTimeout(function () {
      $('#message').fadeOut('slow', function () {
        $(this).remove();
      });
    }, 1000); // 2000 milliseconds = 2 seconds
  });



  // comment
</script>
</html>