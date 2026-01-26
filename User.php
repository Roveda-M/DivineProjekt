<?php
class User {
    private $conn;
    private $table = 'user';

    public function __construct($db) {
        $this->conn = $db;
    }
public function isUserExists($email, $username) {
        $query = "SELECT id FROM {$this->table} WHERE email = :email OR username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        return $stmt->rowCount() > 0; // true nëse ekziston
    }



    public function register($fullname,  $username,$email, $password) {
        $query = "INSERT INTO {$this->table} (fullname, username, email, password) VALUES (:fullname,  :username,:email, :password)";
        $stmt = $this->conn->prepare($query);

         if ($this->isUserExists($email, $username)) {
            return false; // nuk lejohet regjistrimi
        }


 $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // Bind parameters
        $stmt->bindParam(':fullname', $fullname);
          $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
if($stmt->execute()){
 return true;
}


        return false;
    }

 public function login($email, $password) {
        $query = "SELECT id, email, password FROM {$this->table} WHERE email = :email";
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

           
  
  

    

