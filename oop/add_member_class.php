<?php
class addMember extends  Dbh{
    public function setMember($name, $gender, $age, $contact) {
       $query = "INSERT INTO add_member (Name, Gender, Age, Contact) VALUES (?,?,?,?);";
        $stmt = $this->connect()->prepare($query); 

        // Assuming you have a PDOStatement object
        $result = $stmt->execute([$name, $gender, $age, $contact]);

        if ($result) {
            $_SESSION['membermsg']=" Success";

         // echo "Sucess";
        } else {
           echo "Error handling";
        }
        $stmt=null;
    }
  
          

    }
    class Update extends  Dbh {
    
       
        public function updateStatus($memberId) {
            try {
                $updateQuery = "UPDATE add_bill SET Status = 1 WHERE member_id = :id";
                $stmt = $this->connect()->prepare($updateQuery);
                
                // Instead of bindParam, use an associative array with parameters
                $params = array(':id' => $memberId);
                
                $stmt->execute($params);
                return true;
            } catch (PDOException $e) {
                 
                return false;
            }
        }
    
        // Other methods for getting bills and other functionalities
    }

    class addVisitor extends  Dbh{
        public function setVisitor($Visitor_name, $Member_name, $check_in) {
           $query = "INSERT INTO visitor (visitor_name, meet_person, check_in) VALUES (?,?,?);";
            $stmt = $this->connect()->prepare($query); 
    
            // Assuming you have a PDOStatement object
            $result = $stmt->execute([$Visitor_name, $Member_name, $check_in]);
    
            if ($result) {
                $_SESSION['visitormsg']=" Success";

            //echo "Sucess";
            } else {
               echo "Error handling";
            }
            $stmt=null;
        }
    }


    class addCheck extends Dbh {
        public function setCheck($visitorId) {
            try {
                $currentDateTime = date("Y-m-d H:i:s");
    
                // Prepare the SQL query
                $query = "UPDATE visitor SET check_out = :check_out WHERE visitor_id = :id";
                $stmt = $this->connect()->prepare($query);
            
                // Bind parameters and execute the query
                $stmt->bindParam(":check_out", $currentDateTime, PDO::PARAM_STR);
                $stmt->bindParam(":id", $visitorId, PDO::PARAM_INT);
                $stmt->execute();
                
               
            } catch (PDOException $e){
                echo "Error: " . $e->getMessage();
            }
        }
    }




      
?>