<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    

    $sql = "select * from url where id = $id";
    $stmt = $conn->query($sql);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $long_url = $res[0]['long_url'];


    //print_r($_SERVER);

    $browser = $_SERVER['HTTP_USER_AGENT'];
    $os = $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];

    $sql = "INSERT INTO url_details(url_id, browser, os) VALUES ($id, '$browser', $os);";
    $conn->exec($sql);

    print_r($_SERVER);

    header("location: $long_url");
}
