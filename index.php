<!DOCTYPE html>
<html lang="en" ng-app="tonycodes">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tony James - PHP Developer - Laravel</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/modernizr-min.js"></script>
    <script>
      if (!Modernizr.input.placeholder){
        $('input[placeholder], textarea[placeholder]').placeholder();
      }
    </script>
    <script src="js/jquery.placeholder.js"></script>
    <script> if (!Modernizr.input.placeholder){ $('input[placeholder], textarea[placeholder]').placeholder(); } </script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script> $(function(){ $('#contact').validate({ submitHandler: function(form) { $(form).ajaxSubmit({ url: 'process.php', success: function() { $('#contact').hide(); $('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>") } }); } }); }); </script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tony James</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Tony James Software Developer</h1>
        <p class="lead">A driven software engineer with a passion for new technology. This website is currently being revamped, in the meantime feel free to email me.</p>
        <div id="contact-form">
          <form id="contact" method="post" action="">
            <fieldset>
              <label for="name">Name</label>
                <input type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">
              <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
              <label for="phone">Phone</label>
                <input type="text" name="phone">
              <label for="website">Website</label>
                <input type="url" name="url" placeholder="http://">
              <label for="message">Question/Comment</label>
                <textarea name="message"></textarea>
                <input type="submit" name="submit" id="submit" value="Send Message" />
              </fieldset>
            </form>
          </div><!-- /end #contact-form -->
      </div>

    </div><!-- /.container -->


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
