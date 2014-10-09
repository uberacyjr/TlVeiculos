@extends('admin.area_administrativa')

@section('conteudoAdmin')


              <?php echo HTML::script('js/dropzone.js'); ?>
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

 {{ Form::open(array('route' => 'admin.store', 'class' => 'form-horizontal', 'id'=> 'demo-upload', 'files' => true )) }}
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Marca</label>
      <div class="col-sm-3" >
        <select class="form-control" name="idBrands">
          @foreach($brands as $brand)
            <option value=" {{ $brand->idBrands }} ">
              {{ $brand->descMarcas }} 
            </option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="descModelos" class="col-sm-2 control-label">Modelo</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="descModelos" id="modelo" placeholder="Nome do Carro">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Combustível</label>
    <div class="col-sm-3">
        <select class="form-control" name="idFuels">
          @foreach($fuels as $fuel)
            <option value=" {{ $fuel->idFuels }} ">
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
            <option value=" {{ $exchange->idExchange }} ">
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
            <option value=" {{ $color->idColors }} ">
              {{ $color->descCor }} 
            </option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="placaCarro" class="col-sm-2 control-label">Placa</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="placaCarro" id="placaCarro" placeholder="Placa">
    </div>
  </div>
  <div class="form-group">
    <label for="anoModelo" class="col-sm-2 control-label">Ano</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="anoModelo" id="anoModelo" placeholder="Ano">
    </div>
  </div>
    <div class="form-group">
    <label for="quilometragemCarro" class="col-sm-2 control-label">Quilometragem</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="quilometragemCarro" id="quilometragemCarro" placeholder="Quilometragem">
    </div>
  </div>
    <div class="form-group">
    <label for="precoCarro" class="col-sm-2 control-label">Preço</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="precoCarro" id="precoCarro" placeholder="Preço">
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
  </div>
  <hr>
 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Imagens</label>
    <div class="col-sm-3">
  
        <input type="file" name="imagem[]" id="imagem" multiple/>
    </div>
  </div>

  <div  class="col-sm-3" >
         <input type="submit" class="btn" value="Anunciar">
  </div>
  </div>
 {{Form::close()}}
               
      </div><!--/col-span-6-->
     
      </div><!--/row-->
 @stop