<html>
    <head>
        <title>Variable Variables</title>
    </head>
    <body>
    <?php
    $a = "hello";
    $hello = "Hello everyone.";
    echo $a."<br />";
    echo $hello. "<br />";

    echo $$a;
    ?>
</html>
