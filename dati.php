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
    $myKeyword = $_POST['keyword'];
    $
    $completePar = 'Hi. Im Jon and that is my incredible' . ' ' . $myKeyword;
    $censured = str_replace($myKeyword, '***', $completePar);
    if ($num)
    
    $completeParLen = strlen($completePar);
    

    ?>

    <h1>Guess the KEYWORD number</h1>
    <p> <?php echo $censured ?> </p>
    <p> <?php echo 'Your paragraph have ' . $completeParLen . ' characters' ?> </p>
    <p> <?php echo 'yO' ?></p>
</body>
</html>