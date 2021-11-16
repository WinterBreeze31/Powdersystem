<?php 

//REMEMBER TO FILL IN THE CORRECT DATABASE INFORMATION BEFORE USE

    function Query($val){
        $conn = new PDO('mysql:host=localhost;dbname=general-testing-data', 'root', 'mysql');
        $sql = $val;
        $sth = $conn->prepare($sql);
        $sth->execute();
    }

    function QueryGet($val){
        $conn = new PDO('mysql:host=localhost;dbname=general-testing-data', 'root', 'mysql');
        $sql = $val;
        $sth = $conn->prepare($sql);
        $sth->execute();
        $result = $sth->fetchall();
        return($result);
    }
?>