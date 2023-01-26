<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أضافة خبر</title>
</head>

<body>

    <?php

    if (isset($_POST["btn"])) {

        $my_id = $_POST["id"];
        $image = basename($_FILES["images"]["name"]);
        $my_date = $_POST["date"];
        $my_title = $_POST["title"];
        $my_string = $_POST["stirngg"];

        $data = new mysqli("localhost", "root", "", "data_news");

        $table = $data->query("UPDATE `table_news` SET `id`='$my_id',`image`='$image',`my_date`='$my_date',`my_title`='$my_title',`my_string`='$my_string' WHERE id = $my_id");

        if ($table > 0) {
            print "<a href='news.html'>الرجوع لصفحة الاخبار</a>";
            print "<br>";
            print "تم تعديل البينات";
        } else {
            print "يوجد مشكلة لم يتم تعديل البيانات";
        }
    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="id" placeholder="enter the the start 1 end 3" name="id">
        <br>
        <br>
        <input type="file" name="images">
        <br>
        <br>
        <input type="text" placeholder="enter date" name="date">
        <br>
        <br>
        <input type="text" placeholder="enter title" name="title">
        <br>
        <br>
        <input type="text" placeholder="enter string" name="stirngg">
        <br>
        <br>
        <input type="submit" name="btn">
    </form>
</body>

</html>