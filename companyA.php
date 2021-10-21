<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "companydatabase.sql.php";
    ?>
    <form action="thirdpage.php" method='post'>
        <label>Enter your name here:</label>
        <input type='text' name='fname'>
        <label>Enter your age here:</label>
        <input type='number' name='age'>
        <label>Enter your username here:</label>
        <input type='text' name='username'>
        <label>Enter your password here:</label>
        <input type='text' name='password'>
        <button>Submit</button>
    </form>
    
    
    
</body>
</html>