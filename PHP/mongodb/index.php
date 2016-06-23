<html>
<head>
    <title>Home Page</title>
</head>
</body>
<?php
    $m = new MongoClient();
    echo "Connection to database Successfuly.";
    $people = $m->people;
    $people_collection = $people->createCollection(
        "people",
        array(
            'capped' => true,
            'size' => 10*1024,
            'max' => 10
        )
    );

    $insert = array("level"=>"Warn");
    $people_collection->insert($insert);

    echo "New database new selected.";
?>
</body>
</html>
