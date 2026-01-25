<?php
class User {
    private $conn;
    private $table = 'user';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($fullname,  $email,$username, $password) {
        $query = "INSERT INTO {$this->table} (fullname,  email,username, password) VALUES (:fullname,  :email,:username, :password)";

        $stmt = $this->conn->prepare($query);

 $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Bind parameters
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $hashedPassword);
if($stmt->execute()){
 return true;
}
           
  
        return false;
    }

    public function login($email, $password) {
        $query = "SELECT id, email, username, password FROM {$this->table} WHERE email = :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Check if a record exists
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                // Start the session and store user data
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                return true;
            }
        }
        return false;
    }
}
?>