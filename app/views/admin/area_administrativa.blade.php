

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <?php echo HTML::script('js/dropzone.js'); ?>
    <?php echo HTML::style('css/basic.css'); ?>

        <!-- CSS code from Bootply.com editor -->
        
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
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><?php echo HTML::link('admin/create','Incluir Carros') ?></li>
             <li> <?php echo HTML::link('/admin','Carros') ?></li>
          </ul>
        </li>
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
 <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- JavaScript jQuery code from Bootply.com editor  -->

<script type='text/javascript'>

$(document).ready(function() {
  $(".alert").addClass("in").fadeOut(4500);
  /* swap open/close side menu icons */
  $('[data-toggle=collapse]').click(function(){
  // toggle icon
  $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
  });       
});

</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-40413119-1', 'bootply.com');
ga('send', 'pageview');
</script>
        
