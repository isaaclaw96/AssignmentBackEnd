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
        include "db.sql.php";
    ?>
    <form action="secondpage.php" method='post'>
        <label>Enter your name here:</label>
        <input type='text' name='fname'>
        <submit>
    </form>
    
    
    
</body>
</html>