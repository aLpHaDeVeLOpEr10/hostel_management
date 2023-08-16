<?php     include "header.php";
 include "./oop/dbh_class.php";

?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Assigned Room</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">All Assigned Room</li>
                        </ol>
                       
                   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Members List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Member ID</th>
                                        <th>Member Name</th>
                                            <th>Room No</th>
                                            <th>category</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Member ID</th>
                                        <th>Member Name</th>
                                            <th>Room No</th>
                                            <th>category</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>

<?php   
include "./oop/show_member_class.php"; 
$showMember = new showBed();
$members= $showMember->getBed();
 foreach ($members as $member) : 
?>

                                        <tr>
                                        <?php 
 $memberName= $member['Member_id'];
 $showName = new showName();
 $Name=$showName->getName($memberName);
 ?>
 <td><?php echo $member['Member_id']; ?></td>
    <td><?php echo $Name; ?></td>
                                            <td><?php echo $member['Room_no']; ?></td>
                                            <td><?php echo $member['Category']; ?></td>
                                           
                                      
                                        </tr>
<?php endforeach; ?>
                                     <!-- i made this -->
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
</div>
</body>
</html>
