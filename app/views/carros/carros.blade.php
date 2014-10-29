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
        @if(!empty($carros))
            <!-- Projects Row -->
            <div class="row">
            
            </div>
            <!-- /.row -->
        @else
            <div  class="col-lg-12"><p>Não possui carro cadastrado</p></div>
        @endif
    </div>
@stop