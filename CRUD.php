// this is comment

<?php
include'conn.php';
// global $conn;

if($_SERVER["REQUEST_METHOD"] == "POST"){
$user = $_POST["username"];
$email = $_POST["email"];
$pass = password_hash($_POST["password"], PASSWORD_BCRYPT); 

$sql = "INSERT INTO registration (username, email, pass) VALUES ('$user', '$email', '$pass')";
$result = pg_query($conn, $sql);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="username">USERNAME</label>
        <input type="text" name="username" id="username" required><br>
        <label for="email">EMAIL</label>
        <input type="email" name="email" id="email" required><br>
        <label for="pass">PASSWORD</label><br>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>


