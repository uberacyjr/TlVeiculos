@extends('layouts.master')

@section('conteudo')
<style>
    .servicos
    {
        display: inline;
        list-style-type: none;
        font-size: 17px;
    }
</style>
    <div style="height:80px; "></div>
                    <div class="col-md-8" style="margin: 0 auto; float: none;">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                 <div class="item active">
                                      <img class="slide-image" src="img/slide1.png" alt="">
                                </div>
                                <div class="item ">
                                    <img class="slide-image" src="img/slide2.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                    </div>
                <div>
                <h1> O MELHOR PARA VOCÊ</h1>  
                <h3> VEÍCULOS NOVOS E SEMINOVOS</h3>  
               </div>
               <div>
                    <ul class="list-inline">
                        <li>
                            <kbd>Compra</kbd>
                        </li>
                        <li>
                            <kbd> Venda</kbd>
                        </li>
                        <li>
                            <kbd>Troca</kbd>
                        </li>
                        <li>
                            <kbd> Consignação</kbd> 
                        </li>
                        <li>
                            <kbd>Financiamento</kbd>
                        </li>
                    </ul>
               </div>
               <div>
                    <h2>A PRIMEIRA AGÊNCIA DE VEÍCULOS  DE VICENTE PIRES!</h2>
               </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350.608206429965!2d-48.03360801263368!3d-15.80309566475932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDQ4JzExLjAiUyA0OMKwMDInMDEuOCJX!5e1!3m2!1spt-BR!2sbr!4v1414111871201" width="400" height="300" frameborder="0" style="border:0"></iframe>
              </div>
              <div id="fb-root"></div>
@stop