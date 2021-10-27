<?php

// $link = mysqli_connect('localhost', 'root', '', 'test');
// if (mysqli_connect_errno()) {
//     echo 'Ошибка подключения к БД (' . mysqli_connect_errno() . '(:' . mysqli_connect_error();
//     exit();
// }


// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'test');

// $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// if ($mysql->connect_errno) exit('Ошибка подключения к БД');
// $mysql->set_charset('utf8');
// $mysql->close();


//--
if (isset($_POST['name']) && isset($_POST['patronymic']) && isset($_POST['email']) && isset($_POST['phone'])  && isset($_POST['text'])) {
    // 
    // Переменные с формы
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];



    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = 'test'; // Имя БД
    $db_table = "forma"; // Имя Таблицы БД

    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса
        $data = array('name' => $name, 'patronymic' => $patronymic, 'email' => $email, 'phone' => $phone, 'text' => $text);
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (name, patronymic, email, phone, text) values (:name, :patronymic, :email, :phone,  :text)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }

    if ($result) {
        echo "Успех. Информация занесена в базу данных";
    }
}
