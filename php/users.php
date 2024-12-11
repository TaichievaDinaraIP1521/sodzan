<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список организаций</title>
    <link rel="stylesheet" href="/styles/style2.css">
</head>
<body>
    <div class="container">
        <p style="text-align: center; font-weight: 600; font-size:30px;">Список записей</p>
        <div class="d1">
            <p style="font-weight: 600; font-size:27px;">Пользователи</p> 
            <a href="../index.html" class="back-button">Назад</a>    
        </div>
        
        <div class="table-wrap">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Наименование</th>
                    <th>Сокращенное наименование</th>
                    <th>Тип организации</th>
                    <th>Должность руководителя</th>
                    <th>ФИО руководителя</th>
                    <th>Должность ответственного лица</th>
                    <th>ФИО ответственного лица</th>
                    <th>Телефон</th>
                    <th>Email</th>
                </tr>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "jjj";
                $dbname = "organizations_db";
                $port = 3306;
                // Создаем соединение
                $conn = new mysqli($servername, $username, $password, $dbname,$port);

                // Проверяем соединение
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Выбираем данные из таблицы
                $sql = "SELECT * FROM organizations";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Выводим данные каждой строки
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["full_name"] . "</td>";
                        echo "<td>" . $row["short_name"] . "</td>";
                        echo "<td>" . $row["organization_type"] . "</td>";
                        echo "<td>" . $row["director_position"] . "</td>";
                        echo "<td>" . $row["director_name"] . "</td>";
                        echo "<td>" . $row["responsible_position"] . "</td>";
                        echo "<td>" . $row["responsible_name"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>0 results</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </div>
        
       
    </div>
</body>
</html>