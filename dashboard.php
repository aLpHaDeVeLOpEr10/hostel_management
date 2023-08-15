<?php
include "logout.php";
include "header.php";
?>
<style>
  .card_row {
    display: flex;
    justify-content: space-between;
    /* Distribute space between cards */
    margin: 20px;
  }

  .card {
    flex: 1;
    /* Equal width for all cards */
    background-color: var(--bs-card-cap-bg);
    padding: 20px;
    box-sizing: border-box;
    margin-right: 20px;
    border-radius: 10px;

    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }
</style>
<div id="layoutSidenav_content">
  <main>
    <div class="card mb-4">

      <div class="card-body">
        <div class="card_row">
          <div class="card">
            <a href="add_member.php" style="text-decoration: none; color:black;">
              <h4>Add Member</h4>
            </a>

          </div>
          <div class="card">
            <a href="assign_bed.php" style="text-decoration: none; color:black;">
              <h4>Assign Room</h4>
            </a>
          </div>
          <div class="card">
            <a href="payment_assign.php" style="text-decoration: none; color:black;">
              <h4>Add Payment</h4>
            </a>

          </div>
          <div class="card">
            <a href="visitor.php" style="text-decoration: none; color:black;">
              <h4>Add Visitors</h4>
            </a>

          </div>
          <div class="card">
            <a href="add_notice.php" style="text-decoration: none; color:black;">
              <h4>Add Notice</h4>
            </a>

          </div>
        </div>
        <div class="card-body">
          <div class="card_row">
            <div class="card">
              <a href="show_member.php" style="text-decoration: none; color:black;">
                <h4>Show Member</h4>
              </a>
            </div>
            <div class="card">
              <a href="ShowBed_detail.php" style="text-decoration: none; color:black;">
                <h4>Show Room</h4>
              </a>
            </div>
            <div class="card">
              <a href="show_bill.php" style="text-decoration: none; color:black;">
                <h4>Show Payment</h4>
              </a>

            </div>
            <div class="card">
              <a href="show_visitor.php" style="text-decoration: none; color:black;">
                <h4>Show Visitor</h4>
              </a>
            </div>
            <div class="card">
              <a href="show_notice.php" style="text-decoration: none; color:black;">
                <h4>Show Notice</h4>
              </a>
            </div>

          </div>

        </div>

  </main>
  <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
      <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">Copyright &copy; Your Website 2023</div>
        <div>
          <a href="#">Privacy Policy</a>
          &middot;
          <a href="#">Terms &amp; Conditions</a>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>

      


</body>

</html>