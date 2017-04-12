<?php

require 'Form.php';

?>

<!DOCTYPE HTML>

<html>

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>New User</title>

</head>

<body>

<form class="form-horizontal" action="BDDConnection.php" method="post">

    <?php

    $form = new Form();

    echo $form->inputName();
    echo $form->inputPassword();
    echo $form->submit();
    echo $form->newMail();

    ?>

</form>

</body>

</html>




