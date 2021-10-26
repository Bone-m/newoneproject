<?php
require_once 'include/database.php';
require_once 'include/functions.php';

?>
<pre>
<?php
// var_dump($categories);
// print_r($categories);



?>
</pre>
<html>

<head>
    <title>Запись в БД через форму на php</title>
</head>

<body>
    <form method="POST" action="">
        <input name="name" type="text" placeholder="Имя" />
        <input name="text" type="text" placeholder="Текст" />
        <input type="submit" value="Отправить" />
        <?php

        // // Переменные с формы
        // $name = $_POST['name'];
        // $text = $_POST['text'];
        // // Собираем данные для запроса
        // $data = array('name' => $name, 'text' => $text);
        // // Подготавливаем SQL-запрос
        // $query = $db->prepare("INSERT INTO $db_table (name, text) values (:name, :text)");
        // // Выполняем запрос с данными
        // $query->execute($data);
        // if ($result) {
        //     echo "Информация занесена в базу данных";
        // }

        ?>
    </form>
</body>

</html>