
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BEM VINDO TLVEÍCULOS</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
    <?php echo HTML::script('js/jquery-1.10.1.min.js'); ?>

    <?php echo HTML::script('js/dropzone.js'); ?>
    <?php echo HTML::style('css/basic.css'); ?>
    <?php echo HTML::script('js/mask.js'); ?>
        <!-- CSS code from Bootply.com editor -->
</head>
        <style type="text/css">
            .navbar-static-top {
  margin-bottom:20px;
}

i {
  font-size:16px;
}

.nav > li > a {
  color:#787878;
}
  
footer {
  margin-top:20px;
  padding-top:20px;
  padding-bottom:20px;
  background-color:#efefef;
}

/* count indicator near icons */
.nav>li .count {
  position: absolute;
  bottom: 12px;
  right: 6px;
  font-size: 9px;
  background: rgba(51,200,51,0.55);
  color: rgba(255,255,255,0.9);
  line-height: 1em;
  padding: 2px 4px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}

/* indent 2nd level */
.list-unstyled li > ul > li {
   margin-left:10px;
   padding:8px;
}
        </style>

        
<body>
     
        <!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <?php echo HTML::link('/','Início', array('class'=>'navbar-brand')) ?>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
      <li>
      <?php echo HTML::link('admin/create','Incluir Carro') ?></li>
      <li> <?php echo HTML::link('/admin','Carros') ?></li>
      <li><?php echo HTML::link('/logout','Sair') ?></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>

    <div class="row">
      <div class="col-sm-12">
      @yield('conteudoAdmin')
    </div>
  </div>
<!-- /Main -->

<footer class="text-center">SYNCONNECT 2014</footer>

</body>

</html>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-40413119-1', 'bootply.com');
ga('send', 'pageview');
</script>
        
