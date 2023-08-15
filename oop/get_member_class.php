
<?php

class getMember extends  Dbh{
    public function showMember() {
        $query = "SELECT Member_id, Name FROM add_member";
        $stmt =$this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}

?>

