  <?php     include "header.php";
 include "./oop/dbh_class.php";


 if (isset($_GET['pending']) && $_GET['pending'] == 'yes') {
include "./oop/add_member_class.php";
 $memberId = $_GET['userId'];
 $showBill = new Update();
 $showBill->updateStatus($memberId);
 }?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Payment</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">All Payment</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                payment List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Member ID</th>
                                        <th>Member Name</th>
                                            <th>Invoice No</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Member ID</th>
                                        <th>Member Name</th>
                                            <th>Invoice No</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php   
include "./oop/show_member_class.php"; 
 $showBill = new showBill();
$members= $showBill->getBill();
foreach ($members as $member):
?>
<tr>
<?php 
 $memberName= $member['member_id'];
 $showName = new showName();
 $Name=$showName->getName($memberName);
 ?>
 <td><?php echo $member['member_id']; ?></td>
    <td><?php echo $Name; ?></td>
    <td><?php echo $member['invoice_no']; ?></td>
    <td><?php echo $member['ammount']; ?></td>
    <?php if($member['Status'] == 0): ?> 
        <td><a style="text-decoration: none; color: red;" href="show_bill.php?userId=<?php echo $member['member_id']; ?>&pending=yes">Pending</a></td>    <?php else: ?>
        <td><spam style="color: green;">Approved</spam></td>
    <?php endif; ?>                                      
</tr>
<?php endforeach;

#junaid changed?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
</div>
</body>
</html>
