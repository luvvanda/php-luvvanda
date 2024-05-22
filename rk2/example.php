<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'your_database';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Неверный формат";
    }
    elseif (strlen($password) < 8 || !preg_match('/[0-9]/', $password) || !preg_match('/[!?A-Z]/', $password)) {
        echo "Пароль должен содержать 8 символов, цифры, заглавные латинские буквы и спец символы";
    } else {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Users (email, password) VALUES ('$email', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";

            $message = $_POST['message'];
            $channel_id = 1; 
            $save = 0;
            $like = 0; 
            $description = ''; 

            $user_id = $conn->insert_id;

            $field_id = getFieldIdByName('#cake'); 

            $sql = "INSERT INTO SMS (id, User_id, channel_id, Description, Data, save, Like)
                    VALUES (NULL, $user_id, $channel_id, '$description', '$message', $save, $like)";
            $conn->query($sql);

            $sql = "INSERT INTO Field (id, id_field) VALUES (NULL, $field_id)";
            $conn->query($sql);

            $sql = "INSERT INTO (id, id_field) VALUES (NULL, $field_id)";
            $conn->query($sql);

            echo "<p>Сообщение сохранено: $message</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
