<?php 
function  afficher(){
    $servarname = "localhost" ;
    $username = "root";
    $dbname = "user_management";
    $password = "kamal12345";
    $conn = mysqli_connect($servarname,$username,$password, $dbname);
    $sql = "SELECT * FROM users";
    $sql_query = mysqli_query($conn,$sql);
    // $result = $conn->query($sql_query);

    $users = [];
    while($row = $result->fetch_assoc()){
         $users [] = $row;
    };
    return $users;
}


?> 