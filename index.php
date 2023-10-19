<?php

if (strpos($_SERVER['HTTP_USER_AGENT'], 'okhttp/3.15') !== false) {
    header('Content-Type: application/json');
    readfile('tvbox.json');
} else {
    echo "<br>" . "请勿非法使用 ". "<br>";
    exit();
}
?>
