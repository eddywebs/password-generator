
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>XKCD Inspired Password Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv/html5shiv.js"></script>
    <![endif]-->
    <link href="css/custom.css" rel="stylesheet">
    <?php include("controller/generator.php"); ?>




  </head>

  <body>
<a href="https://github.com/you"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/8b6b8ccc6da3aa5722903da7b58eb5ab1081adee/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_orange_ff7600.png"></a>
<!--     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
<!--         </div>
      </div>
    </div> -->


  <!-- Part 1: Wrap all page content here -->
<div id="wrap">
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>XKCD Password Generator</h1>
        </div>
        <p class="password"><?=$password?></p>

        <form class="form-horizontal" role="form">
         <div class="form-group">
          <label for='number_of_words' class="control-label"># of Words</label>
          <input maxlength=1 type='text' class="form-control" name='number_of_words' id='number_of_words'>  (Max 9)
        </div>
        <br>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <input type='checkbox' name='add_number' id='add_number'> 
          <label for='add_number'>Add a number</label>
        </div>
        </div>
        </div>
        
        <br>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <input type='checkbox' name='add_symbol' id='add_symbol'> 
          <label for='add_symbol'>Add a symbol</label>
        </div>
        </div>
        </div>
        <br/>   
        <input type='submit' class='btn btn-default' value='Generate Password'>
        </form>
        <a href="http://xkcd.com/936/" target="_blank">
          <img src="password_strength.png" alt="xkcd style password generator" width="518" height="421">
        </a>
</div><!-- Part 1: Wrap/page content ends here -->

      <div id="push"></div>
</div>  
<div id="footer">
      <div class="container">
        <p class="muted credit"><a href="http://xkcd.com/936/">XKCD Inspired Password Generator</a> by eddywebs.</p>
      </div>
</div>

  </body>
</html>
