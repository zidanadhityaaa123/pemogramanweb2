<?php
    $value = "ini adalah cookie pertama";
    $value2 = "ini adalah cookie kedua menggunakan expire time";
    if(isset($_COOKIE['first_cookie']))
    setcookie('first_cookie', $value);

    if(isset($_COOKIE['second_cookie']))
    setcookie('second_cookie', $value2, time() + 60 * 60 * 24 * 30 )
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>SKIBIDI</title>
</head>
<body>
    <h1>Implementasi Cookie</h1>
    <?php
        if(isset($_COOKIE['first_cookie'])){
            echo $_COOKIE['first_cookie'];
        }else{
            echo "cookie belum di set";
        }

        echo "<br />";


        if(isset($_COOKIE['second_cookie'])){
            echo $_COOKIE['second_cookie'];
        }else{
            echo "cookie kedua belum di set";
        }

        if(isset($_COOKIE['first_cookie']))
        setcookie('first_cookie'); // menghapus cookie first_cookie
    ?>
</body>
</html>