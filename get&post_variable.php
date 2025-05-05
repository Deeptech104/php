 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post">
    <label >user name </label><br>
    <input type="text" name="username" id="username"><br>
    <label > password</label><br> 
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="login">
    </form>
 </body>
 </html>
<?php
echo "{$_POST["username"]}<br>"; 
echo "{$_POST["password"]}<br>";
?>