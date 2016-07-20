<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGE with SIDEBAR PAGE</title>

    <?php include '_inc/css.php';?>
</head>

<body id="inner-page">
    <?php include '_inc/super-menu-02.php';?>
    <?php include '_inc/header.php';?>
    <?php include '_inc/mobile-menu.php';?>
    

    <div class="container">
        <div class="row">
            <aside class="page-aside col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <ul>
                    <li><button class="gradient-btn">Tasting Bar</button></li>
                    <li><button class="gradient-btn">Seagrape Cafe</button></li>
                    <li><button class="gradient-btn">Awards</button></li>
                    <li><button class="gradient-btn">All Events</button></li>
                </ul>
            </aside>
            <section class="main-content col-xs-12 col-sm-12 col-md-8 col-lg-8">
               <img src="_img/taste.jpg" class="img-responsive">
            </section>
        </div><!-- end row-->
    </div><!--end container-->

    <?php include '_inc/footer-02.php';?>

</body>
</html>