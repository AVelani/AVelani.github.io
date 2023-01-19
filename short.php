<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        <pre>
                                             <input type='text' name='url' />
                        
                                            <input type='submit' value='Click to Short' name='btn'/>
                                            
                                            <input type='reset' />
        </pre>
    </form>
</body>
</html>


<?php
include 'db.php';
if(isset($_POST['btn'])){
    $long_url = $_POST['url'];
    

    //$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
  
    $sql = "INSERT INTO `url` (`long_url`) VALUES ('".$long_url."')";

    $conn->exec($sql);
    $id = $conn->lastInsertId();
    echo "http://localhost/demo/".$id;
}
?>