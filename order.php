<html>
<body>
    <?php
    $db = pg_connect('ec2-54-147-126-202.compute-1.amazonaws.com dbname=defa7p4eknp4ra user=lbburibyykcqgn password=71d893e494fee2d03a586734e4d5c73d724f7fc577fd8c041a5dbb34f46dd1f9');

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
