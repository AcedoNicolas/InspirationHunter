<?php
class Post extends User{
    protected $pdo; //Protected omdat de classe kan gebruikt worden in deze classe en in andere
function __construct($pdo){
    $this->pdo = $pdo;
}
}
?>