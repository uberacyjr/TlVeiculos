@extends('admin.area_administrativa')

@section('conteudoAdmin')


           
<style>
  .itens{

   margin-left:4px;
 }
</style>

     <strong><i class="glyphicon glyphicon-dashboard"></i> Cadastrar carro</strong>
      
        <hr>
      
    <div class="row">
<!-- center left--> 

<div class="col-md-9">

<div class="col-sm-12">

 {{ Form::open(array('action' => array('admin.update', $car->idCars ),'method'=>'put' ,'class' => 'form-horizontal', )) }}
 <input type="hidden" value="{{$car->idCars}}" name="id" />
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Marca</label>
      <div class="col-sm-3" >
        <select class="form-control" name="idBrands">
          @foreach($brands as $brand)
            <option value=" {{ $brand->idBrands }}" <?php if($brand->idBrands == $model->idBrands){ echo "selected='selected'"; }?> >
              {{ $brand->descMarcas }} 
            </option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="descModelos" class="col-sm-2 control-label">Modelo</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="descModelos" id="modelo" value="{{ $model->descModelos}}" placeholder="Nome do Carro">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Combustível</label>
    <div class="col-sm-3">
        <select class="form-control" name="idFuels">
          @foreach($fuels as $fuel)
            <option value=" {{ $fuel->idFuels }} " <?php if($fuel->idFuels == $car->idFuels){ echo "selected='selected'"; }?>>
              {{ $fuel->descCombustivel }} 
            </option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="idExchange" class="col-sm-2 control-label">Marcha</label>
    <div class="col-sm-3">
      <select class="form-control" name="idExchange">
          @foreach($exchanges as $exchange)
            <option value=" {{ $exchange->idExchange }} " <?php if($exchange->idExchange == $car->idExchange){ echo "selected='selected'"; }?>>
              {{ $exchange->descMarcha }} 
            </option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Cor</label>
    <div class="col-sm-3">
     <select class="form-control" name="idColors">
          @foreach($colors as $color)
            <option value=" {{ $color->idColors }} " <?php if($color->idColors == $car->idColors){ echo "selected='selected'"; }?>>
              {{ $color->descCor }} 
            </option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="placaCarro" class="col-sm-2 control-label">Placa</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="placaCarro" id="placaCarro" value="{{ $car->placaCarro}}" placeholder="Placa">
    </div>
  </div>
  <div class="form-group">
    <label for="anoModelo" class="col-sm-2 control-label">Ano</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="anoModelo" id="anoModelo"   value="{{ $car->anoModelo}}" placeholder="Ano">
    </div>
  </div>
    <div class="form-group">
    <label for="quilometragemCarro" class="col-sm-2 control-label">Quilometragem</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="quilometragemCarro" id="quilometragemCarro"    value="{{ $car->quilometragemCarro}}" placeholder="Quilometragem">
    </div>
  </div>
    <div class="form-group">
    <label for="precoCarro" class="col-sm-2 control-label">Preço</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="precoCarro" id="precoCarro" value="{{ $car->precoCarro}}" placeholder="Preço">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Portas</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Portas">
    </div>
  </div>
  <hr>
   <div class="form-group">
      <label class="itens" >AirBag</label>
      <input type="checkbox" name="airBag"/>
      <label class="itens" >Alarme</label>
      <input type="checkbox" name="alarme"/>
      <label class="itens" >arCondicionado</label>
      <input type="checkbox" name="arCondicionado"/>
      <label class="itens" >bancoMotoristaAjusteAltura</label>
      <input type="checkbox" name="bancoMotoristaAjusteAltura"/>
      <label class="itens" >bancoMotoristaAjusteAltura</label>
      <input type="checkbox" name="bancoMotoristaAjusteAltura"/>
      <label class="itens" >bancoMotoristaAjusteAltura</label>
      <input type="checkbox" name="bancoMotoristaAjusteAltura"/>

  </div>
  <hr>

  <div  class="col-sm-3" >
         <input type="submit" class="btn btn-lg btn-success" value="Salvar">
  </div>
  </div>
 {{Form::close()}}
               
      </div><!--/col-span-6-->
     
      </div><!--/row-->
 @stop