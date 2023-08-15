<?php
class assignBed extends  Dbh{
    public function addBed($Member_id, $room_no, $category) {
       $query = "INSERT INTO assign_bed (Member_id, Room_no, Category) VALUES (?,?,?);";
        $stmt = $this->connect()->prepare($query); 

        // Assuming you have a PDOStatement object
        $result = $stmt->execute([$Member_id, $room_no, $category]);

        if ($result) {
            
            $_SESSION['assignmsg']="payment Success";

        } else {
           echo "Error handling";
        }
        $stmt=null;
    }
  
          

    }
    class addNotice extends  Dbh{
        public function notice($notice, $notice_date) {
           $query = "INSERT INTO add_notice (notice,notice_date) VALUES (?,?);";
            $stmt = $this->connect()->prepare($query); 
    
            // Assuming you have a PDOStatement object
            $result = $stmt->execute([$notice, $notice_date]);
    
            if ($result) {
                
                $_SESSION['addmsg']="payment Success";
    
            } else {
               echo "Error handling";
            }
            $stmt=null;
        }
      
              
    
        }

    class assignBill extends  Dbh{
        public function addBill($Member_id1, $invoice, $ammount, $status_id) {
           $query = "INSERT INTO add_bill (member_id, invoice_no, ammount,Status) VALUES (?,?,?,?);";
            $stmt = $this->connect()->prepare($query); 
    
            // Assuming you have a PDOStatement object
            $result = $stmt->execute([$Member_id1, $invoice, $ammount,$status_id]);
    
            if ($result) {
            $_SESSION['billmsg']="payment Success";

             // echo "Sucess";
            } else {
               echo "Error handling";
            }
            $stmt=null;
        }
    }
?>