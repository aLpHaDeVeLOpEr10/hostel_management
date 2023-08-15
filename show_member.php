<?php     include "header.php";
 include "./oop/dbh_class.php";

?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">All Members</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">All Member</li>
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
                                        <th>Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Contact</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Contact</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

<?php   
include "./oop/show_member_class.php"; 
$showMember = new showMember();
$members= $showMember->getMember();
 foreach ($members as $member) : 
?>

                                        <tr>
                                            <td><?php echo $member['Name']; ?></td>
                                            <td><?php echo $member['Gender']; ?></td>
                                            <td><?php echo $member['Age']; ?></td>
                                            <td><?php echo $member['Contact']; ?></td>
                                      
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
