<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
//require_once 'connection.php'; // подключаем скрипт 
$host = "localhost"; // адрес сервера 
$database = 'compstore'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'ершызфыыцщкв'; // пароль
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 
$query ="SELECT * FROM phones";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{ $rows = mysqli_num_rows($result);
echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
for($i=0; $i<$rows;$i++)
{
$row = mysqli_fetch_row($result);
echo "<tr>";
for ($j =0; $j<3; $j++) echo "<td>$row[$j]</td>";
echo "</tr>";
}
echo "</table>";
// очищаем результат
mysqli_free_result($result);
}
mysqli_close($link);
//izmenit jasadikkoy bratan
?>
</body>
</html>