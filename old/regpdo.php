<?php

$conn = new PDO("mysql:dbname=regs;host=1.0.0.13", "root", "sigma@2017");

$stmt = $conn->prepare("select * from reg_func_email");

$stmt->execute();

$results= $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);
die();

foreach($results as $row ){

    echo $row;
    echo "<br>";


    
}

?>