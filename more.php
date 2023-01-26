<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>more</title>
</head>

<body>
    <?php

    $mid = $_GET["my_id"];
    
    $data = new mysqli("localhost", "root", "", "data_news");

    $table = $data->query("select * from table_news where id = $mid");

    if ($table->num_rows > 0) {
        while ($row = $table->fetch_assoc()) {
            print $row["my_string"];
        }
    }
    ?>
</body>

</html>