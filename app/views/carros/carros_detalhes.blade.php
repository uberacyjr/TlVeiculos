@extends('layouts.master')

@section('conteudo')
    
   
<script type="text/javascript">

    $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */
            $('.money').mask('000.000,00', {reverse: true});
            $('.fancybox').fancybox();

    });
</script>
<style>
p{

    margin:0;
    margin-top: 5px;
}
</style>
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
               <a class="fancybox" href=<?php echo "../".$imagem->pathImagem; ?>  data-fancybox-group="gallery" >  {{ HTML::image("$imagem->pathImagem",'foto', array('class'=>'img-responsive')) }}</a>
        
            </div>
           @if($car->precoCarro != "0.00")  
                <p ><strong style="font-size:19px; color:#666666;" >R$ </strong> <label class="money" style="font-size:22px;"> {{$car->precoCarro}}</label></p>
           @else   
             <p ><strong style="font-size:19px; color:#666666;" >R$ Venha Conferir </strong></p>

           @endif
           <hr>
            <div class="col-md-4">
                <strong>Opcionais do carro </strong>
                  @if($item->airBag == 1)
                        Air Bag <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                <p>
                    @if($item->alarme == 1)
                       Alarme <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                    @if($item->arCondicionado == 1)
                    Ar Condicionado <label class="glyphicon glyphicon-ok"></label>
                    @endif
                <p>
                    @if($item->bancoMotoristaAjusteAltura == 1)
                     Banco Motorista Ajuste Altura <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                <p>
                    @if($item->cdPlayer == 1)
                     CD Player <label class="glyphicon glyphicon-ok"></label>
                    @endif     
                </p>
                 <p>
                    @if($item->computadorBordo == 1)
                     Computador de Bordo <label class="glyphicon glyphicon-ok"></label>
                    @endif
                <p>
                    @if($item->controleAutomaticoVelocidade == 1)
                     Controle Automatico de Velocidade <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                <p>
                    @if($item->controleTracao == 1)
                     Controle Tração <label class="glyphicon glyphicon-ok"></label>
                    @endif
                <p>    
                    @if($item->desembacadorTraseiro == 1)
                     Desembacador Traseiro <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                <p>
                    @if($item->direcaoHidraulica == 1)
                     Direcao Hidráulica <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->dvdPlayer == 1)
                     DVD Player <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->encostoCabecaTraseiro == 1)
                     Encosto Cabeca Traseiro <label class="glyphicon glyphicon-ok"></label>
                    @endif 
                </p>
                 <p>
                    @if($item->farolXenonio == 1)
                     Farol Xenonio <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->freioAbs == 1)
                     Freio Abs <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->gps == 1)
                     GPS <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->limpadorTraseiro == 1)
                     Limpador Traseiro <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->retrovisorEletrico == 1)
                     Retrovisor Elétrico <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->rodaLigaLeve == 1)
                     Limpador Traseiro <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->sensorChuva == 1)
                     Sensor de Chuva <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->sensorEstacionamento == 1)
                     Sensor de Estacionamento <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->tetoSolar == 1)
                     Teto Solar <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                   <p>
                    @if($item->tracao4x4 == 1)
                     Tracao 4x4 <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>

                   <p>
                    @if($item->travasEletricas == 1)
                     Travas Elétricas <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>

                   <p>
                    @if($item->vidrosEletricos == 1)
                     Vidros Elétricos <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>

                   <p>
                    @if($item->voltanteRegulagemAltura == 1)
                     Voltante Regulagem Altura <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->bancoCouro == 1)
                     Banco de Couro <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->radio == 1)
                     Radio <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->capotaMaritima == 1)
                     Capota Maritima <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
                 <p>
                    @if($item->protetorCacamba == 1)
                     Protetor Caçamba <label class="glyphicon glyphicon-ok"></label>
                    @endif
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->

             <div class="col-lg-12">
                <h3 class="page-header">Observações <label class="glyphicon glyphicon-circle-arrow-down"></label> </h3>
                @if($car->obs != "")
                    <p> {{$car->obs}}</p>
                @else
                     <p>Não possui observações</p>
                @endif
            </div>
            <div class="col-lg-12">
                <h3 class="page-header"></h3>
            </div>
            @foreach($images as $img)
            @if($imagem->pathImagem !=$img->pathImagem )
            <div class="col-sm-2">    
                   <a class="fancybox" href=<?php echo "../".$img->pathImagem; ?>  data-fancybox-group="gallery" > {{ HTML::image("$img->pathImagem",'', array('class'=>'img-responsive portfolio-item')) }}</a>
            </div>
            @endif
            @endforeach



        </div>


@stop