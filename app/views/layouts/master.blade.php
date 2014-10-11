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
    <!-- Custom CSS -->
    <?php echo HTML::style('css/3-col-portfolio.css'); ?>
    <?php echo HTML::style('css/screen.css'); ?>
    <?php echo HTML::script('js/jquery.js'); ?>
    <?php echo HTML::script('js/easySlider1.7.js'); ?>
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
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LOGO TLVEÍCULOS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?php echo HTML::link('.','Início') ?>
                    </li>
                    <li>
                        <?php echo HTML::link('carros/','Carros') ?>
                    </li>
                    <li>
                        <a href="#">Contatos</a>
                    </li>
                    <li>
                    <?php echo HTML::link('carros/quemsomos','Empresa') ?>
                    </li>
                    <li>
                    <?php echo HTML::link('logar','Entrar') ?>
                       
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


        @yield('conteudo')


    <div class="col-lg-12">
        <hr>
    </div>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SYNCONNECT 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>


    <!-- /.container -->
    <?php echo HTML::script('js//jquery-1.11.0.js'); ?>
    <?php echo HTML::script('js/bootstrap.min.js'); ?>

</body>

</html>
