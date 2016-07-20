<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME PAGE - Jost</title>
	<script src="//use.typekit.net/zva5xrl.js"></script>
<script>try{Typekit.load( { async: false } );}catch(e){}</script>
<link rel="stylesheet" href="_css/main.css">
	
<!--<link href="_lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
<!--
<link href="_css/wireframe.css" rel="stylesheet">
<link href="_css/global.css" rel="stylesheet">
<link href="_css/header.css" rel="stylesheet">
<link href="_css/super-menu-02.css" rel="stylesheet">
<link href="_css/mobile-menu-02.css" rel="stylesheet">
<link href="_css/filter-controls-03.css" rel="stylesheet"> 
<link href="_css/big-four-03.css" rel="stylesheet">
<link href="_css/sidebar.css" rel="stylesheet"> 
<link href="_css/wine-grid-04.css" rel="stylesheet">
<link href="_css/footer-03.css" rel="stylesheet"> 
-->
	</head>

<body id="body-home" class="jost">
    
    <?php include '_inc/super-menu-02.php';?>
    <?php include '_inc/header.php';?>
    <?php include '_inc/mobile-menu-02.php';?>
    <?php include '_inc/big-four-03.php';?>
    

    <div class="container">
        <div class="row">
            <section class="main col-sm-12">
                <h1>(Feature Area)</h1>
            </section>
        </div><!-- end row-->
    </div><!--end container-->


<?php include '_inc/footer-02.php';?>
<script src="_js/scripts-min.js"></script>
    <!-- JOST MENU -->
    <script>
        $(function () {
            var box = $('.jostmenu');
            var button = $('.jostmenu-toggle');
            button.on('click', function () {
                box.toggleClass('active');
            });
        });
    </script>

</body>
</html>