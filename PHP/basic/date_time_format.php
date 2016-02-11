<html>
    <head>
        <title>Title</title>
    </head>
    <body>
    <?php
        $timestamp = time();
        function strip_zeros_from_date($marked_string) {

            //Remove the marked zeros
            $no_zeros = str_replace('*0','',$marked_string);

            //Remove any remaining marks.
            $cleaned_string = str_replace('*','', $no_zeros);

            return $cleaned_string;
        }

        echo strip_zeros_from_date(strftime("The date today is *%m/*%d/%y", $timestamp));

        echo "<hr />";

        $dt = time();
        $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);

        echo $mysql_datetime;
    ?>
    </body>
</html>

