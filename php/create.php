<?php
    if (isset($_POST['name']) &&
       isset($_POST['gender'])) {

        include "../db_conn.php";

        $name = $_POST['name'];
        $gender= $_POST['gender'];
        if (empty($name)){
            header("Location: ../index.php?ms=Name is required");
            exit; 
        
    }else{
        if (isset($_POST['programmer'])){
            $programmer="si";
        }else{
            $programmer="no";
        }
        $sql = "INSERT INTO users(name,gender,programmer)VALUES('$name','$gender','$programmer')";

        $result = mysqli_query($conn, $sql);
        if($result){
            $ms="creado satisfactoriamente";
            header("Location: ../index.php?ms=$ms");
            exit;
        }else{
            $ms="cometio un error satisfactoriamente";
            header("Location: ../index.php?ms=$ms");
            exit;
        }
    }
}else{
    header("Location: ../index.php");
    exit;
}

        
    

?>