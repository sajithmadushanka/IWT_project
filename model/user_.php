<?php require_once "../config/db.php" ?>

<?php 
  class UserCreate {
    public function createUser($name, $email, $password) {
        $encrypted_password = sha1($password);
        global $con;
        
        // sql query for insert database
        $query = "INSERT INTO users (name_, email_, password_) VALUES ('{$name}', '{$email}', '{$encrypted_password}');";
        
        // execute query as Procedural  method
        $result = mysqli_query($con, $query);

        if(!$result){
            echo "erorr occure";
        }else{
            echo "added user details to db";
            header("Location: ../public/login.php"); // executed without issues then redirect to login page
        }
    }
}

?>



