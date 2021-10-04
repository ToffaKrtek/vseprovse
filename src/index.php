<?php


try {
    // $dbh = new PDO("mysql:host=db", "vseprovse", "userpassword");
    $conn = new PDO('mysql:host=db; port=3306; dbname=vseprovsedb', "vseprovseuser", "userpassword");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stm = $conn->query("SELECT * FROM ads");
    $ads = $stm->fetchAll();

    print_r($ads);
    echo "Yes";
} catch (PDOException $e) {
    echo "No!";
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}