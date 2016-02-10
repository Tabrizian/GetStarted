<html>
    <head>
        <title>Dates and Times: Unix</title>
    </head>
    <body>
    <?php

        echo time()."<br />";
        echo (checkdate(12,31,2000)?'true':'false'). "<br />" ;
        echo mktime(2, 30, 45, 10, 1, 2009) . "<br />";


        $unix_time_stamp = strtotime("now");
        echo $unix_time_stamp . "<br />";
    ?>
    </body>
</html>
