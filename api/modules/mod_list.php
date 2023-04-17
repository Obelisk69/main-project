<?php
//код запроса

$sql = "SELECT * FROM `students`";

//выполнить запрос

$result = $this->connect -> query($sql);

//вести результат запроса на страницу

while ($row = $result -> fetch_assoc())
{
    echo "<div>
    $row[fname], $row[lname], $row[gender], $row[age]
        </div>";
}