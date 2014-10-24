<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BEM VINDO TLVEÍCULOS</title>

    <!-- Bootstrap Core CSS -->
    <?php echo HTML::style('css/bootstrap.min.css'); ?>
     <?php echo HTML::script('js/jquery-1.10.1.min.js'); ?>

    <?php echo HTML::script('js/jquery.fancybox.js'); ?>
    <?php echo HTML::style('css/jquery.fancybox.css'); ?>
    <!-- Custom CSS -->
    <?php echo HTML::style('css/3-col-portfolio.css'); ?>
    <?php echo HTML::style('css/screen.css'); ?>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             <a href="/">{{ HTML::image('img/logotlveiculos.png', 'logo', array('height' => '35px', 'style'=>'margin-top:9px')) }}</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?php echo HTML::link('.','Início') ?>
                    </li>
                    <li>
                        <?php echo HTML::link('conteudo/','Carros') ?>
                    </li>
                    <li>
                        <a href="#">Contatos</a>
                    </li>
                    <li>
                    <?php echo HTML::link('carros/quemsomos','Empresa') ?>
                    </li>
                    <li>
                    <?php echo HTML::link('login','Entrar') ?>
                       
                    </li>

                </ul>
               
                    <p class="text-right" style="color:white;"><span class="glyphicon glyphicon-earphone"></span>  <strong>(61) 3597-1700 / (61) 3597-2060 </strong></p>
              
            </div>

            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container -->
    </nav>


        @yield('conteudo')


    <div class="col-lg-12">
      
    </div>
        <footer style="background-color:#efefef;">
            <div class="row">
                <div class="col-lg-12">
                </br>
                    <address><strong>Endereço: </strong> Rua 8 Condomínio 197 loja 01 - Vicente Píres - DF <strong>Telefones: </strong> (61) 3597 1700 - (61) 3597 2060</address>
                       <address> <div class="fb-like" data-href="https://www.facebook.com/tlveiculos?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div></address>
                </div>
            </div>
            <!-- /.row -->
        </footer>


    <!-- /.container -->
    <?php echo HTML::script('js/bootstrap.min.js'); ?> 
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>

</html>
