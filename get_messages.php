<?php

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

$fileName = 'messages.txt';
if (file_exists($fileName)) {
    $messages = file($fileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($messages as $msg) {
        echo "<div class='message'>$msg</div>";
    }
}
?>
