<?php
 include "./oop/dbh_class.php";

 if (isset($_GET['check_out']) && $_GET['check_out'] == 'yes') {
    include "./oop/add_member_class.php";
    $visitorId = $_GET['visitorId'];
    $showCheck = new addCheck();
    $showCheck->setCheck($visitorId);
    }
       include "header.php";
    ?>

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Visitor</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">All Visitor</li>
                        </ol>
                       
                   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Visitor List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>visitor Name</th>
                                            <th>Meet to</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>visitor Name</th>
                                            <th>Meet to</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>

                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>

<?php   
include "./oop/show_member_class.php"; 
$showMember = new showVisitor();
$members= $showMember->getVisitor();
 foreach ($members as $member) : 
?>

                                        <tr>
                                            <td><?php echo $member['visitor_name']; ?></td>
                                            <td><?php echo $member['meet_person']; ?></td>
                                            <td><?php echo $member['check_in']; ?></td>
                                            <?php if($member['check_out']==""):?>
                                            <td><a href="show_visitor.php?visitorId=<?php echo $member['visitor_id']; ?>&check_out=yes"><input type="button" value="leave" name="check_out"></a> </td>
                                            <?php else: ?>
                                                <td><?php echo $member['check_out']; ?></td>
                                                <?php endif; ?> 
                                           
                                      
                                        </tr>
<?php endforeach; ?>
                                     
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
</div>
</body>
</html>
