@extends('layouts.master')

@section('conteudo')
    
   
<script type="text/javascript">

    $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

    });
</script>

    <div style="height:20px;"></div>
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    {{$model->descModelos}}
                    <small> {{$brand->descMarcas}}</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
          
            <div class="col-md-8">
                {{ HTML::image("$imagem->pathImagem",'foto', array('class'=>'img-responsive')) }}
        
            </div>

            <div class="col-md-4">
                <strong>Opcionais</strong>
                <p>Aribarg</P>
                <p>Aribarg</P>
                <p>Aribarg</P>
            </div>
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Mais Fotos</h3>
            </div>
            @foreach($images as $img)
            @if($imagem->pathImagem !=$img->pathImagem )
            <div class="col-sm-3 col-xs-6">    
                   <a class="fancybox" href=<?php echo "../".$img->pathImagem; ?>  data-fancybox-group="gallery" > {{ HTML::image("$img->pathImagem",'', array('class'=>'img-responsive portfolio-item')) }}</a>
        
            </div>
            @endif
            @endforeach



        </div>
        <!-- /.row -->
        <hr>

@stop