<?php 
    function Query($val){
        $conn = new PDO('mysql:host=localhost;dbname=toets_landen', 'root', 'mysql');
        $sql = $val;
        $sth = $conn->prepare($sql);
        $sth->execute();
    }

    function QueryGet($val){
        $conn = new PDO('mysql:host=localhost;dbname=toets_landen', 'root', 'mysql');
        $sql = $val;
        $sth = $conn->prepare($sql);
        $sth->execute();
        $result = $sth->fetchall();
        return($result);
    }
?>