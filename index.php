<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style>
	body {
	  padding-top: 60px;
	  padding-bottom: 40px;
	}
	</style>
	<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<script src="assets/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <?php /*
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          */
          ?>
          <a class="brand" href="#">Multiplication Grid</a>
          <?php
          /*
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
          */
          ?>
        </div>
      </div>
    </div>

    <div class="container">

      <table>
            <thead>
                <tr>
                    <th></th>
                    <?php
                    for( $x=0; $x<=12; $x++ )
                    {
                        echo '<th>' . $x . '</th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for( $x=0; $x<=12; $x++ )
                {
                    echo '<tr>';
                        echo '<td>' . $x . '</td>';
                        for( $n=0; $n<=12; $n++)
                        {
                            echo '<td><input type="text" class="answer" value="" col="' . $n . '" row="'. $x . '" id="' . $n . '-' . $x . '" /></td>';
                        }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <a href="" class="button reset">Start Again</a>
    </div> <!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.7.2.min.js"><\/script>')</script>

<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>

<script src="assets/js/script.js"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
