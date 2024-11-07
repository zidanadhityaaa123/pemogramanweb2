
<?php
    session_start();
    if(!$_SESSION['count']){
        $_SESSION['count'] = 1;
    } else {
        $oldVal = $_SESSION['count'];
        $_SESSION['count'] = $oldVal + 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Implementasi Session</h1>
    <p>Anda sudah mengunjungi halaman ini sebanyak <?php 
        if($_SESSION['count']){
            echo $_SESSION['count'];
        }
    ?> kali.</p>
</body>
</html>
