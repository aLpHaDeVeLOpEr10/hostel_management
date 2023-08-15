<?php


class User extends  Dbh{
    public function loginUser($username, $password) {
        $query = "SELECT * FROM user WHERE username = ? AND password = ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$username, $password]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $_SESSION['user_id'] = $user['user_id'];
            return $user;
        } else {
            // Login failed
            return false;
        }
    }
}
?>