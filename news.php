<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap7/css7/all.min.css">
    <link rel="stylesheet" href="bootstrap7/css7/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap7/css7/Gulf projects.css">
    <title>النخبة</title>
</head>

<body style="background-color: #1B294E;">
    <!-- start nav -->
    <nav class="navbar navbar-expand-lg bg-light2 nav_news">
        <div class="container">
            <div class="d-flex" style="gap: 15px;">
                <a href="#"><i class="fab fa-facebook-f my_icon"></i></a>
                <a href="#"><i class="fab fa-twitter my_icon"></i></a>
                <a href="#"><i class="fab fa-youtube my_icon"></i></a>
                <a href="#"><i class="fab fa-telegram-plane my_icon"></i></a>
            </div>
            <ul class="navbar-nav ms-auto mb-lg-0">
                <p>الخميس يناير 2023</p>
            </ul>
        </div>
    </nav>
    <!-- end nav -->
    <!-- start header -->
    <nav class="navbar navbar-expand-lg bg-light-tow">
        <div class="container">
            <div class="d-flex">
                <i class="fas fa-search here_icon"></i>
                <div class="navbar-collapse collapse div_flex1" id="navbarSupportedContent1" style>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li>
                            <a href="news.html">
                                <p class="my_news">الاخبار</p>
                            </a>
                        </li>
                        <li>
                            <a href="gotech.php">
                                <p class="my_news">الفاتورات والعروض</p>
                            </a>
                        </li>
                        <li>
                            <a href="invitation.html">
                                <p class="my_news">البرامج والحصص</p>
                            </a>
                        </li>
                        <li>
                            <a href="Exhibition life.html">
                                <p class="my_news">المرافق</p>
                            </a>
                        </li>
                        <li>
                            <a href="Sport your body.html">
                                <p class="my_news">الرئيسية</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="div_flex">
                        <div class="div_right1">
                            <p>اهلا بك في موقع النخبة</p>
                            <p class="p_margin">العام للجميع</p>
                        </div>
                        <div class="">
                            <img src="image 7/images.jfif" class="my_image">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end header -->
    <!-- start main -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="my_card" style="text-align: right;">
                            <p class="p_elect">أخبار المنتخبات</p>
                            <div class="carousel-item active">
                                <?php

                                $data = new mysqli("localhost", "root", "", "data_news");

                                $table = $data->query("select * from table_news where id = 1");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image 7/" . $row["image"] . "' class='d-block w-100 card_image1' alt='error the server im soory'>";
                                    }
                                }
                                ?>
                                <div class="card-body body_back">
                                    <?php

                                    $table = $data->query("select * from table_news where id = 1");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='p_gold'>" . $row["my_date"] . "</p>";
                                            print " <h5 class='p_color'>" . $row["my_title"] . "</p>";
                                            print "<a href='more.php?my_id=" . $row["id"] . "' style='text-decoration: none;'><p class='p_gold'>قراءة المزيد</p></a>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <?php

                                $data = new mysqli("localhost", "root", "", "data_news");

                                $table = $data->query("select * from table_news where id = 2");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image 7/" . $row["image"] . "' class='d-block w-100 card_image1' alt='error the server im soory'>";
                                    }
                                }
                                ?>
                                <div class="card-body body_back">
                                    <?php

                                    $table = $data->query("select * from table_news where id = 2");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='p_gold'>" . $row["my_date"] . "</p>";
                                            print " <h5 class='p_color'>" . $row["my_title"] . "</p>";
                                            print "<a href='more.php?my_id=" . $row["id"] . "' style='text-decoration: none;'><p class='p_gold'>قراءة المزيد</p></a>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <?php

                                $data = new mysqli("localhost", "root", "", "data_news");

                                $table = $data->query("select * from table_news where id = 3");

                                if ($table->num_rows > 0) {
                                    while ($row = $table->fetch_assoc()) {
                                        print "<img src='image 7/" . $row["image"] . "' class='d-block w-100 card_image1' alt='error the server im soory'>";
                                    }
                                }
                                ?>
                                <div class="card-body body_back">
                                    <?php

                                    $table = $data->query("select * from table_news where id = 3");

                                    if ($table->num_rows > 0) {
                                        while ($row = $table->fetch_assoc()) {
                                            print "<p class='p_gold'>" . $row["my_date"] . "</p>";
                                            print " <h5 class='p_color'>" . $row["my_title"] . "</p>";
                                            print "<a href='more.php?my_id=" . $row["id"] . "' style='text-decoration: none;'><p class='p_gold'>قراءة المزيد</p></a>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="div_flex8">
                    <div class="div_mother">
                        <p class="p_color">منتخب الشباب يحاول جاهدا على الصعود الي الدور التالي في
                            المنتخبات
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 39.jfif" class="flex_image">
                    </div>
                </div>
                <div class="div_flex8">
                    <div class="div_mother">
                        <p class="p_color">دولة الانجليزي تغرم فريق مانشستر يونايتد على ما فعلة
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 40.webp" class="flex_image">
                    </div>
                </div>
                <div class="div_flex8">
                    <div class="div_mother">
                        <p class="p_color">الفيفا تقرر بدأ العمل في برمجة لعبة فيفا 2024
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 41.jfif" class="flex_image">
                    </div>
                </div>
                <div class="div_flex8">
                    <div class="div_mother">
                        <p class="p_color">هاري كين يفضل العب في فريق تشلسي لانة واثق من الفوز
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 42.jpg" class="flex_image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container_flex mt-5 pt-5">
        <div class="div_hr1"></div>
        <p class="p_color">رياضة عالمية</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #8859C8;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 43.jfif" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">هنا يتم زرع التحدي في باقي الالعاب في كرة القدم</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #ECAD39;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 44.webp" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">مانشستر ستي يأكد على الجهوزي للمبارة القادمة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #439ADD;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 45.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">دولة الانجليزي تغرم فريق مانشستر يونايتد على ما فعلة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #EE5854;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 46.jfif" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">تدريبات الفريق تعم بي الحماس للمبارة بين الالعبين</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #8859C8;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 40.webp" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">هنا يتم زرع التحدي في باقي الالعاب في كرة القدم</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #ECAD39;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 47.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">مانشستر ستي يأكد على الجهوزي للمبارة القادمة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #439ADD;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 48.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">دولة الانجليزي تغرم فريق مانشستر يونايتد على ما فعلة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #EE5854;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 49.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">تدريبات الفريق تعم بي الحماس للمبارة بين الالعبين</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 my_margin">
                <a href="singup.php" target="_blank"><button class="button_right">أضافة<br>خبر</button></a>
            </div>
            <div class="col-sm-12 col-lg-6 my_margin">
                <a href="#"><button class="button_left">مزبد<br>الاخبار</button></a>
            </div>
        </div>
    </div>
    <div class="container container_flex mt-5 pt-5">
        <div class="div_hr1"></div>
        <p class="p_color">رياضة عالمية</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #8859C8;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 43.jfif" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">هنا يتم زرع التحدي في باقي الالعاب في كرة القدم</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #ECAD39;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 44.webp" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">مانشستر ستي يأكد على الجهوزي للمبارة القادمة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #439ADD;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 45.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">دولة الانجليزي تغرم فريق مانشستر يونايتد على ما فعلة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #EE5854;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 46.jfif" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">تدريبات الفريق تعم بي الحماس للمبارة بين الالعبين</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container container_flex mt-5 pt-5">
        <div class="div_hr1"></div>
        <p class="p_color">رياضة عالمية</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="my_card" style="text-align: right;">
                    <div class="carousel-item active">
                        <img src="image 7/Scroll Group 38.jfif" class="d-block w-100 card_image1" alt="...">
                        <div class="card-body body_back">
                            <h5 class="p_color">المنتخب السوداني يلتقي زامبيا وديا استعدادا لتصفيات بطولة كأس
                                العالم العرب
                            </h5>
                            <a href="#" style="text-decoration: none;">
                                <p class="p_gold">قراءة المزيد</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="div_flex9">
                    <div class="div_mother">
                        <p class="p_color">منتخب الشباب يحاول جاهدا على الصعود الي الدور التالي في
                            المنتخبات
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 39.jfif" class="flex_image">
                    </div>
                </div>
                <div class="div_flex9">
                    <div class="div_mother">
                        <p class="p_color">دولة الانجليزي تغرم فريق مانشستر يونايتد على ما فعلة
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 40.webp" class="flex_image">
                    </div>
                </div>
                <div class="div_flex9">
                    <div class="div_mother">
                        <p class="p_color">الفيفا تقرر بدأ العمل في برمجة لعبة فيفا 2024
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 41.jfif" class="flex_image">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="div_flex9">
                    <div class="div_mother">
                        <p class="p_color">منتخب الشباب يحاول جاهدا على الصعود الي الدور التالي في
                            المنتخبات
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 39.jfif" class="flex_image">
                    </div>
                </div>
                <div class="div_flex9">
                    <div class="div_mother">
                        <p class="p_color">دولة الانجليزي تغرم فريق مانشستر يونايتد على ما فعلة
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 40.webp" class="flex_image">
                    </div>
                </div>
                <div class="div_flex9">
                    <div class="div_mother">
                        <p class="p_color">الفيفا تقرر بدأ العمل في برمجة لعبة فيفا 2024
                        </p>
                        <p class="div_ccc">2023-1-26</p>
                    </div>
                    <div class="div_image">
                        <img src="image 7/Scroll Group 41.jfif" class="flex_image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 my_margin">
                <a href="#"><button class="button_right1">الرجالية<br>الكرة</button></a>
            </div>
            <div class="col-sm-12 col-lg-6 my_margin">
                <a href="#"><button class="button_left1">الكرة<br>النسائية</button></a>
            </div>
        </div>
    </div>
    <div class="container container_flex mt-5 pt-5">
        <div class="div_hr1"></div>
        <p class="p_color">رياضة عالمية</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #8859C8;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 43.jfif" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">هنا يتم زرع التحدي في باقي الالعاب في كرة القدم</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #ECAD39;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 44.webp" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">مانشستر ستي يأكد على الجهوزي للمبارة القادمة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #439ADD;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 45.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">دولة الانجليزي تغرم فريق مانشستر يونايتد على ما فعلة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #EE5854;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 46.jfif" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">تدريبات الفريق تعم بي الحماس للمبارة بين الالعبين</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #8859C8;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 40.webp" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">هنا يتم زرع التحدي في باقي الالعاب في كرة القدم</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #ECAD39;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 47.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">مانشستر ستي يأكد على الجهوزي للمبارة القادمة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #439ADD;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 48.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">دولة الانجليزي تغرم فريق مانشستر يونايتد على ما فعلة</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my_margin">
                <p class="p_elect" style="background-color: #EE5854;">أخبار المنتخبات</p>
                <img src="image 7/Scroll Group 49.jpg" class="card-img-top my_card_image">
                <div class="card-body card_mycolor">
                    <p class="card-title">تدريبات الفريق تعم بي الحماس للمبارة بين الالعبين</p>
                    <p class="card-text div_ccc">2023-1-26</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end main -->
    <!-- start footer -->
    <br>
    <div class="div_footer" style="background-color: #212F54;">
        <p>جميع الحقوق محفوظة-2023</p>
    </div>
    <!-- end footer -->
</body>
<script src="bootstrap7/js7/all.min.js"></script>
<script src="bootstrap7/js7/bootstrap.bundle.min.js"></script>

</html>