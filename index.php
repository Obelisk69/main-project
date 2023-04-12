<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиент-серверов приложения</title>
</head>
<body>

    <?php
    
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","root");
    define("DB","schol");

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
        $row[l_name], $row[f_name], $row[gender], $row[age]
            </div>";
    }

    


    ?>
    
</body>
</html>