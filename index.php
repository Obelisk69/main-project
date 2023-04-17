<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиент-серверов приложения</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>

    <form id="form-insert-student">
        <input type="text" name="fname" id="fname" placeholder="Введите имя" required><br>
        <input type="text" name="lname" id="lname" placeholder="Введите фамилию" required><br>
        <input type="number" name="age" id="age" placeholder="Введите возраст" required><br>
        <input type="radio" name="gender" id="m" value="m" checked>
        <label for="m">Мужской</label>
        <input type="radio" name="gender" id="f" value="f">
        <label for="f">Женский</label><br>
        <input type="submit" value="Добавить">
    </form>

    <div class="content"></div>

    <?php
    
    require_once ("config.php");

    //соединение с базой данных

    $connect = new mysqli(HOST,USER,PASSWORD,DB);
    if ($connect -> connect_error){
        exit("Ошибка подключения к БД:" .$connect -> connect_error);
    }

    //установить кадировку

    $connect -> set_charset("utft8");

    //код запроса

    $sql = "SELECT * FROM `students`";

    //выполнить запрос

    $result = $connect -> query($sql);

    //вести результат запроса на страницу

    while ($row = $result -> fetch_assoc())
    {
        echo "<div>
        $row[fname], $row[lname], $row[gender], $row[age]
            </div>";
    }

    


    ?>
    <div class="block"></div>
    
    <div class="message">
    </div>

</body>
</html>