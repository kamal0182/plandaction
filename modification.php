<?php
// ajoute($name,$lsname,$email,$password);

function modify($name,$lsname,$email,$password ,$id){
     $servarname = "localhost" ;
    $username = "root";
    $dbname = "user_management";
    $password = "kamal12345";
    $conn = mysqli_connect($servarname,$username,$password, $dbname);
    $sql = "UPDATE  users SET  firstname = '$name'  , lastname  = '$lsname', email='$email' ,password = '$password' where id = " .$id; 
    mysqli_query($conn,$sql);
    // $result = $conn->query($sql_query);
}
?>
