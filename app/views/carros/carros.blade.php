@extends('layouts.master')

@section('conteudo')


<div style="height:20px;"></div>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Carros
                    <!--<small>Semi Novos</small>-->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        @if(!empty($carros))
            <!-- Projects Row -->
            <div class="row">

                @foreach($carros as $carro)

                <div class="col-md-4 portfolio-item">
                    <a href="#">
                        <img class="img-responsive" src="{{ $carro->pathImagem }}" alt="">
                    </a>
                    <h3>
                    <p class="text-uppercase"><?php echo HTML::link('carros_detalhes'," $carro->descModelos ") ?></p>
                    </h3>
                    <p>GOL G IV /2009/2010/ KIT TREND/ 4 PORTAS</p>
                </div>
             @endforeach
            </div>
            <!-- /.row -->
         @else
            <div  class="col-lg-12"><p>Não possui Imagem cadastradas</p></div>
        @endif
    </div>
@stop