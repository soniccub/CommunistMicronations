<?php
// connect to database
define("DB_NAME","");
define("DB_USER","root");
define("DB_PASS","");
define("DB_HOST","");
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
// database error handling
if (!$link) {
    echo 'Unable to connect to the database server.';
    exit();
};
if (!mysqli_set_charset($link, 'utf8')) {
    echo 'Unable to set database connection encoding.';
    exit();
};
if (!mysqli_select_db($link, DB_NAME)) {
    echo 'Unable to locate the database.';
    exit();
};
?>