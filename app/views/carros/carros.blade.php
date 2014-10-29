@extends('layouts.master')

@section('conteudo')


<div style="height:20px;"></div>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Veículos
                    <!--<small>Semi Novos</small>-->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        @if(! $carros->isEmpty())
            <!-- Projects Row -->
            <div class="row">
                @foreach($carros as $carro)
                    @if( $carro->vendido == 1 or  $carro->vendido == null)
                        <div class="col-md-4 portfolio-item">
                            <a href="/conteudo/{{$carro->image->idImages}}">
                                <img class="img-responsive" width="500" src="{{$carro->image->pathImagem}}" alt="">
                            </a>
                            <h3>
                            <?php 
                                $max = 15;
                                $string = substr_replace($carro->model->descModelos, (strlen($carro->model->descModelos) > $max ? '...' : ''), $max);
                            ?>
                            {{ HTML::linkAction('ConteudoController@show',"$string",array($carro->image->idImages), array('class' => 'btn btn-info')) }}  
                            </h3>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- /.row -->
        @else
            <div  class="col-lg-12"><p>Não possui carro cadastrado</p></div>
        @endif
    </div>
@stop