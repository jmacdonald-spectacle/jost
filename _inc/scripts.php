<!--SCRIPTS-->

 <!--SCRIPTS-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src='http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js?v=2.1.9'></script>
  <script src="_js/mixitup-api.js"></script>
    <script src="_lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="//use.typekit.net/zva5xrl.js"></script>
    <script>
        try {
            Typekit.load({
                async: false
            });
        } catch (e) {}
    </script>

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

<!-- MIXITUP sort button bug fix-->
<script>
$("form").submit(function (e) {
      e.preventDefault();
});
</script>