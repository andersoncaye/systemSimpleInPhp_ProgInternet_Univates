<?php

    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    function fun_insert($table, $keys, $values)
    {

        $str = "INSERT INTO {$table} ({$keys}) VALUES ({$values})";

        return mysqli_query($link, $str);

    }

?>