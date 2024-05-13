<?php  
include 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$status = 'user';
error_reporting(E_ERROR | E_PARSE);
if ($stmt = $conn->prepare("SELECT * FROM users WHERE username=?")){

        $stmt->bind_param("s", $username);

        if($stmt->execute()){
            $stmt->store_result();

            $user_check= "";         
            $stmt->bind_result($user_check);
            $stmt->fetch();

            if ($stmt->num_rows == 1){

            header("location:register.php?exists&email=" . $email . "&pass=" . $password);
            exit;

            }else{
                $sql = "INSERT INTO users (username, password, status, email) VALUES ('$username','$password','$status','$email')";
 
                mysqli_query($conn, $sql);
                header("location:login.php?user=" . $username);
            }
        }
    }

?>