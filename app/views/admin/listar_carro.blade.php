@extends('admin.area_administrativa')

@section('conteudoAdmin')

<style type="css">
  .vendido
  {
    background-color: red;
  }
   .disponivel
  {
    background-color: green;
  }
</style>
<?php 
  $vendido = "../img/indisponivel.png";
?>
<div class="bs-example">
 @if(!empty($carros))
  
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Disponibilidade</th>
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
         <?php if  ($carro->vendido == null or $carro->vendido == ''  )
         {
           $vendido = "../img/disponivel.png";
            
          }
        ?>
        <tr>
          <td><img src="{{ $vendido }}" /></td>
           <td>
              @if  ($carro->placaCarro != null or $carro->placaCarro != ''  )
                  {{$carro->placaCarro }}
              @endif
          </td>
          <td>
              @if  ($carro->descMarcas != null or $carro->descMarcas != ''  )
                  {{$carro->descMarcas }}
              @endif
          </td>
           <td>
              @if  ($carro->descModelos != null or $carro->descModelos != ''  )
                  {{$carro->descModelos }}
              @endif
          </td>
            <td>
             @if  ($carro->precoCarro != null or $carro->precoCarro != ''  )
                  {{ $carro->precoCarro }}
             @endif
          </td>
             <td>
             @if  ($carro->quilometragemCarro != null or $carro->quilometragemCarro != ''  )
              {{ $carro->quilometragemCarro }}
            @endif
          </td>
          <td>
            @if  ($carro->anoModelo != null or $carro->anoModelo != ''  )
                {{ $carro->anoModelo }}
            @endif
          </td>
          <td> 
           {{ HTML::linkAction('AdminController@edit','Editar Carro',array($carro->idCars), array('class' => 'btn btn-info')) }} {{ HTML::linkAction('ImageController@show','Incluir Imagens',array($carro->idCars), array('class' => 'btn btn-info')) }}  
            {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.destroy', $carro->idCars))) }}
                              {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                          {{ Form::close() }}</h2>
          </td>
        </tr>
        </tr>
        @endforeach
  
      </tbody>
    </table>
    @else
    <div  class="col-md-9"><p>Não possui carro cadastrado</p></div>
    @endif
  </div>
  @stop