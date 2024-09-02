<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        intial-scale=1">
    <title> Document</title>
</head>
<body>
    <?php
    include 'fnc.php';
    $obj=new fnc();
    print "Hi my name is ".$obj->computer_user("John")." and I am ".$obj->user_age(1990)." years old";
    print "<br>";
    print $obj->hash_password("password");
    ?>
</body>
</html>
