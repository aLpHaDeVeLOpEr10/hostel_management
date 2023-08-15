<?php
class showMember extends  Dbh{
    public function getMember() {
        $query = "SELECT * FROM add_member";
        $stmt =$this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
class showBed extends  Dbh{
    public function getBed() {
        $query = "SELECT * FROM assign_bed";
        $stmt =$this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
class showBill extends  Dbh{
    public function getBill() {
        $query = "SELECT * FROM add_bill";
        $stmt =$this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
class showVisitor extends  Dbh{
    public function getVisitor() {
        $query = "SELECT * FROM visitor";
        $stmt =$this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
class showName extends Dbh {
    public function getName($memberName) {
        try {
            $query = "SELECT Name FROM add_member WHERE member_id = :id";
            $stmt = $this->connect()->prepare($query);
            
            // Use bindValue to bind the parameter correctly
            $stmt->bindValue(':id', $memberName, PDO::PARAM_INT);
            
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($result) {
                return $result['Name'];
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Handle exceptions if necessary
            return false;
        }
    }
}
class showNotice extends  Dbh{
    public function getNotice() {
        $query = "SELECT * FROM add_notice";
        $stmt =$this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
?>

