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
                    @if( $carro->vendido == 1 or  $carro->vendido == null)
                        <div class="col-md-4 portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="{{ $carro->pathImagem }}" alt="">
                            </a>
                            <h3>
                            <p class="text-uppercase">
                            {{ HTML::linkAction('ConteudoController@show',"$carro->descModelos",array($carro->idImages), array('class' => 'btn btn-info')) }}
                                
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