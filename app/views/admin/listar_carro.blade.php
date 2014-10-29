@extends('admin.area_administrativa')

@section('conteudoAdmin')
<script type="text/javascript">

    $(document).ready(function() {
         $('.money').mask('000.000,00', {reverse: true});

    });
</script>
   

<?php 
  $vendido = "";
?>
<div class="table-responsive">
 @if(! $carros->isEmpty())
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Placa</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Preço</th>
          <th>Quilometragem</th>
          <th>Ano</th>
          <th>Opções</th>
        </tr>
      </thead>
      <tbody>
        @foreach($carros as $carro)
         <?php 
         if  ($carro->vendido == null or $carro->vendido == '1'  )
         {
           $vendido = "success";  
         }
         else
        {

            $vendido = "danger"; 
        }
        ?>
        <tr class="{{$vendido}}">
           <td>
                {{$carro->placaCarro }}
          </td>
          <td>
                {{$carro->model->brand->descMarcas }}
          </td>
           <td>
                {{$carro->model->descModelos }}
          </td>
            <td class="money">
                  {{ $carro->precoCarro }}
          </td>
         <td>
              {{ $carro->quilometragemCarro }}
          </td>
          <td>  
              {{ $carro->anoModelo }}
          </td>
          <td> 
           {{ HTML::linkAction('AdminController@edit','Editar Carro',array($carro->idCars), array('class' => 'btn btn-info')) }} {{ HTML::linkAction('ImageController@show','Incluir Imagens',array($carro->idCars), array('class' => 'btn btn-info')) }}  
            {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.destroy', $carro->idCars))) }}
                              {{ Form::submit('DELETAR', array('class' => 'btn btn-danger')) }}
                          {{ Form::close() }}</h2>
          </td>
        </tr>
        </tr>
        @endforeach
  
      </tbody>
    </table>
    @else
   <p class="text-center" style="font-size:21px;"><strong>Não possui carro cadastrado <span class="glyphicon glyphicon-warning-sign"></span></strong></p>
    @endif
  </div>
  @stop