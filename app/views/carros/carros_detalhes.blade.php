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
            <p ><strong style="font-size:19px; color:#666666;" >R$ </strong> <label class="money" style="font-size:22px;"> {{$car->precoCarro}}</label></p>
            <div class="col-md-4">
                <strong>Opcionais</strong>
                  <p>
                  @if($item->airBag == 1)
                        Air Bag 
                    @endif
                </p>
                <p>
                    @if($item->alarme == 1)
                       Alarme
                    @endif
                </p>
                    @if($item->arCondicionado == 1)
                    Ar Condicionado
                    @endif
                <p>
                    @if($item->bancoMotoristaAjusteAltura == 1)
                     Banco Motorista Ajuste Altura
                    @endif
                </p>
                <p>
                    @if($item->cdPlayer == 1)
                     CD Player
                    @endif     
                </p>
                 <p>
                    @if($item->computadorBordo == 1)
                     Computador de Bordo
                    @endif
                <p>
                    @if($item->controleAutomaticoVelocidade == 1)
                     Controle Automatico de Velocidade
                    @endif
                </p>
                <p>
                    @if($item->controleTracao == 1)
                     Controle Tração
                    @endif
                <p>    
                    @if($item->desembacadorTraseiro == 1)
                     Desembacador Traseiro
                    @endif
                </p>
                <p>
                    @if($item->direcaoHidraulica == 1)
                     Direcao Hidráulica
                    @endif
                </p>
                 <p>
                    @if($item->dvdPlayer == 1)
                     DVD Player
                    @endif
                </p>
                 <p>
                    @if($item->encostoCabecaTraseiro == 1)
                     Encosto Cabeca Traseiro
                    @endif 
                </p>
                 <p>
                    @if($item->farolXenonio == 1)
                     Farol Xenonio
                    @endif
                </p>
                 <p>
                    @if($item->freioAbs == 1)
                     Freio Abs
                    @endif
                </p>
                 <p>
                    @if($item->gps == 1)
                     GPS
                    @endif
                </p>
                 <p>
                    @if($item->limpadorTraseiro == 1)
                     Limpador Traseiro
                    @endif
                </p>
                 <p>
                    @if($item->retrovisorEletrico == 1)
                     Retrovisor Elétrico
                    @endif
                </p>
                 <p>
                    @if($item->rodaLigaLeve == 1)
                     Limpador Traseiro
                    @endif
                </p>
                 <p>
                    @if($item->sensorChuva == 1)
                     Sensor de Chuva
                    @endif
                </p>
                 <p>
                    @if($item->sensorEstacionamento == 1)
                     Sensor de Estacionamento
                    @endif
                </p>
                 <p>
                    @if($item->tetoSolar == 1)
                     Teto Solar
                    @endif
                </p>
                   <p>
                    @if($item->tracao4x4 == 1)
                     Tracao 4x4
                    @endif
                </p>

                   <p>
                    @if($item->travasEletricas == 1)
                     Travas Elétricas
                    @endif
                </p>

                   <p>
                    @if($item->vidrosEletricos == 1)
                     Vidros Elétricos
                    @endif
                </p>

                   <p>
                    @if($item->voltanteRegulagemAltura == 1)
                     Voltante Regulagem Altura
                    @endif
                </p>
                 <p>
                    @if($item->bancoCouro == 1)
                     Banco de Couro
                    @endif
                </p>
                 <p>
                    @if($item->radio == 1)
                     Radio
                    @endif
                </p>
                 <p>
                    @if($item->capotaMaritima == 1)
                     Capota Maritima
                    @endif
                </p>
                 <p>
                    @if($item->protetorCacamba == 1)
                     Protetor Caçamba
                    @endif
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->

             <div class="col-lg-12">
                <h3 class="page-header">Observações</h3>
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