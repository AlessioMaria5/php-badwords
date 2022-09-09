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
    $myKeyword = $_POST['keyword']
    ?>

    <h1>That is my Life</h1>
    <p>Hi. I'm Jon and that is my <?php echo 'incredible' . ' ' . $myKeyword ?> </p>
</body>
</html>