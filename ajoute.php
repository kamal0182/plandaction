<?php 

function ajoute($name,$lsname,$email,$password){
    $servarname = "localhost" ;
    $username = "root";
    $dbname = "user_management";
    $password = "kamal12345";
    $conn = mysqli_connect($servarname,$username,$password, $dbname);
    $sql = "INSERT  INTO users (firstname ,lastname ,email, password ) values ('$name','$lsname','$email','$password');";
    mysqli_query($conn,$sql);
    $result = $conn->query($sql_query);
    
}

?>