<?php
//$_REQUEST,$_SERVER , $_COOKIE , $_ENV , $_FILES
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';
// Mac - printenv 
// setcookie('Mycookie', 'MehdatEltony', time() + 60 * 60 * 24 * 3, '/', 'localhost', false, true);
// var_dump($_COOKIE);
var_dump($_FILES);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="pdf" id="pdf">
        <input type="submit" name="submit" value="uplode file">
    </form>
</body>

</html>