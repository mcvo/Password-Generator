<?php
function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!£$%_^&+@()=?[]{}-/';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$pass = htmlspecialchars(generateRandomString());
$passlen = strlen(generateRandomString());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>password generator</title>
    <style>h1, p{ font-family: sans-serif; text-align: center; }body{ padding-top: 10px; }</style> 
</head><body>
<?php
if(!empty($pass)){
    echo"<h1>$pass</h1>";
    echo"<p>$passlen</p>"; 
}else{
    header("Refresh:0");
}
?></body></html>