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


public function login($email, $password){//Checken voor de gegevens in onze database voor de login
  
    $passwordHash = password_hash($password,PASSWORD_BCRYPT);
    $stmt = $this->pdo->prepare('SELECT `user_id` FROM `users` WHERE `email` = :email AND `password` = :password');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $passwordHash, PDO::PARAM_STR);
    $stmt->execute();

    $count = $stmt->rowCount();
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($count > 0){
        $_SESSION['user_id'] = $user->user_id;
        header('Location: home.php');
    }else{
        return false;
    }
}
public function checkEmail($email){
    $stmt = $this->pdo->prepare("SELECT 'email' FROM 'users' WHERE 'email' = :email  "); 
    $stmt->bindParam(":email",$email,PDO::PARAM_STR);
    $stmt->execute();

    $count = $stmt->rowCount();
    if($count >0){
        return true;
    }else{
        return false;
    }
}


public function register($email, $password, $screenName){
    $passwordHash = password_hash($password,PASSWORD_BCRYPT);
    $stmt = $this->pdo->prepare("INSERT INTO `users` (`email`, `password`, `screenName`, `profileImage`, `profileCover`) VALUES (:email, :password, :screenName, 'assets/images/ProfileImage.png', 'assets/images/CoverImage.png')");
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":password", $passwordHash , PDO::PARAM_STR);
    $stmt->bindParam(":screenName", $screenName, PDO::PARAM_STR);
    $stmt->execute();

    $user_id = $this->pdo->lastInsertId();
    $_SESSION['user_id'] = $user_id;
  }

// dit zorgt ervoor dat userinfo getoond wordt in home.php
public function userData($user_id){
    $stmt = $this->pdo->prepare('SELECT * FROM `users` WHERE `user_id` = :user_id');
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_OBJ);
}

}
?>