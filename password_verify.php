<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password_verify</title>
</head>
<body>
    <?php
    if(isset($_POST['password'])
    && isset($_POST['hash']))
    {
        $password = $_POST['password'];
        $hash = $_POST['hash'];
        if(password_verify($password,$hash))
        {
            echo "The password " . 
            $password . " was verifed against the hash". $hash."<br>";

            
        }else{
            echo "Password was not verified <br>";
        }
    }
    ?>
    <form action="password_verify.php" method="post">
        Enter Your password to verify:
            <input type="text" name="password" id="hash">
            <br>
            Enter the hash to verify against:
                <input type="text" name="hash" id="hash">
                <br>
                <input type="submit" value="submit">
</form>
</body>
</html>