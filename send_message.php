<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $message = $_POST['message'];

    if (!empty($message)) {

        $fileName = 'messages.txt';
        $file = fopen($fileName, 'a');
        fwrite($file, $message . PHP_EOL);
        fclose($file);
    }
}
?>
