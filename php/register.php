<?php

$servername = "localhost";
$username = "root";
$password = "jjj";
$dbname = "organizations_db";
$port = 3306;

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получаем данные из формы
$full_name = $_POST['full_name'];
$short_name = $_POST['short_name'];
$organization_type = $_POST['organization_type'];
$director_position = $_POST['director_position'];
$director_name = $_POST['director_name'];
$responsible_position = $_POST['responsible_position'];
$responsible_name = $_POST['responsible_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Вставляем данные в таблицу
$sql = "INSERT INTO organizations (full_name, short_name, organization_type, director_position, director_name, responsible_position, responsible_name, phone, email) 
        VALUES ('$full_name', '$short_name', '$organization_type', '$director_position', '$director_name', '$responsible_position', '$responsible_name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Перенаправляем на страницу со списком организаций
header("Location: users.php");
exit();
?>