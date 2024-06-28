<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redirect Based on Date</title>
</head>
<body>
 

    <?php
    $currentDay = date('j');

    if ($currentDay == 1) {
        header('Location: ./page1.php');
        exit;
    } else {
        header('Location: ./page2.php');
        exit;
    }
    ?>

    
</body>
</html>