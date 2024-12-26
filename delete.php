<?php
function delet($id){
    $servarname = "localhost" ;
    $username = "root";
    $dbname = "user_management";
    $password = "kamal12345";
    $conn = mysqli_connect($servarname,$username,$password, $dbname);
    $sql = "DELETE FROM   users  where id = ".$id ; 
    $sql_query= mysqli_query($conn,$sql);
    // $result = $conn->query($sql_query);
}
?>