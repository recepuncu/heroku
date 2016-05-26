<?php

$link = mysqli_connect("41890c76-2387-452d-998b-a61200fcbd5c.mysql.sequelizer.com", "qzcwkydbvwclcwan", "ARWoTJDf8hanBmvheyWBsjCmu6Ybrh4GWbwxdmZcza3q63JMF8wQeEornK2WTBVY", "db41890c762387452d998ba61200fcbd5c");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);