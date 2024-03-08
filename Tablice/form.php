<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Witaj, $name!";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "Twój adres email to: $email";
}
?>