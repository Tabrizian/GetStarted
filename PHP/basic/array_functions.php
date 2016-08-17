<html>
    <head>
        <title>Array Functions</title>
    </head>
    <body>
    <?php
        $numbers = array(1,2,3,4,5,6);
        print_r($numbers);
        echo "<br /><br />";

        $a = array_shift($numbers);
        echo "a:" . $a . "<br />";
        print_r($numbers);


    ?>
    </body>
</html>
