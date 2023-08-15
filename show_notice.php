<?php     include "header.php";


 include "./oop/dbh_class.php";

?>

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Notice</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">All Notices</li>
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
                                        <th>Serial No</th>
                                        <th>Notice</th>
                                        <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Serial No</th>
                                        <th>Notice</th>
                                        <th>Date</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php   
 
include "./oop/show_member_class.php"; 
$showMember = new showNotice();
$members= $showMember->getNotice();
$serialNumber = 1;
 foreach ($members as $member) : 
?>

                                        <tr>
                                        <td><?php echo $serialNumber; ?></td>
                                           <td><?php echo $member['notice']; ?></td>
                                            <td><?php echo $member['notice_date']; ?></td>
                                          
                                           
                                      
                                         </tr>
 <?php 
$serialNumber++;
endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
</div>
</body>
</html>
