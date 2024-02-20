<?php
global $db_connect;
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

    if ($db_connect->query($sql) === TRUE) {
        echo "Данные успешно добавлены!";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $db_connect->error;
    }

    $db_connect->close();
}
?>
