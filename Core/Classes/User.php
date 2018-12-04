<?php
class User{
    protected $pdo; //Protected omdat de classe kan gebruikt worden in deze classe en in andere
function __construct($pdo){
    $this->pdo = $pdo;
}
public function checkInput($var){//deze functie kan van overal opgeroepen worden
$var = htmlspecialchars($var);
$var = trim($var);//removes whitespace
$var = stripcslashes($var); //remove slaches from string
return $var;
}
public function login($email,$password){//Checken voor de gegevens in onze database voor de login
$stmt = $this->pdo->prepare("SELECT'email' FROM 'users' WHERE 'email' = :email AND 'password' = :password");// hier voorkom je SQL injection
$stmt->bindParam(":email",$email,PDO::PARAM_STR);
$stmt->bindParam(":password",password_hash($password, PASSWORD_BCRYPT),PDO::PARAM_STR);
$stmt->execute();

//checken of de gevonden users minstens 1 is
$user = $stmt->fetch(PDO::FETCH_OBJ);
$count = $stmt->rowCount();

if($count > 0){
    $_SESSION['user_id'] = $user->user_id;
    header('Location:Home.php');
}else{
   return false; 
}
}
}
?>