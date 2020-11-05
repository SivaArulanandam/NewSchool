<html>
<body>
    <?php
    $db = pg_connect('ec2-18-211-86-133.compute-1.amazonaws.com dbname=dar301jpdvtmma user=swvepilfwgnvop password=cb01cc33ae803c8c4e317963ad4fc29d1824d0fc913d2b76adb48bfcf522b97');

    $firstname = pg_escape_string($_POST['firstname']);
    $surname = pg_escape_string($_POST['surname']);

    $query = "INSERT INTO detials VALUES('" . $firstname . "', '" . $surname . "')";
    $result = pg_query($query);
    if (!$result) {
        $errormessage = pg_last_error();
        echo "Error with query: " . $errormessage;
        exit();
    }
    printf ("These values were inserted into the database - %s %s", $firstname, $surname);
    pg_close();
    ?>
</body>
</html> 
