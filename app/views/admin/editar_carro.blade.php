@extends('admin.area_administrativa')

@section('conteudoAdmin')


           
<style>
  .itens{

   margin-left:4px;
 }
</style>

      <div class="container">
    <div class="row"> 

     <strong><i class="glyphicon glyphicon-dashboard"></i> Editar carro</strong>
      
        <hr>
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
  <hr>
   <div class="form-group">
      <h4>Opcionais</h4>
    <label class="itens" >Air Bag</label>
    <input type="checkbox" name="airBag"/>

    <label class="itens" >Alarme</label>
    <input type="checkbox" name="alarme"/>

    <label class="itens" >Banco de Couro</label>
    <input type="checkbox" name="bancoCouro"/>

    <label class="itens" >Capota Maritima</label>
    <input type="checkbox" name="capotaMaritima"/>


    <label class="itens" >Ar Condicionado</label>
    <input type="checkbox" name="arCondicionado"/>

    <label class="itens" >Banco Motorista Ajuste Altura</label>
    <input type="checkbox" name="bancoMotoristaAjusteAltura"/>

    <label class="itens" >CD Player</label>
    <input type="checkbox" name="cdPlayer"/>

    <label class="itens" >Computador de Bordo</label>
    <input type="checkbox" name="computadorBordo"/>
</br>
</br>
      
       <label class="itens" >Controle Automatico Velocidade</label>
      <input type="checkbox" name="controleAutomaticoVelocidade"/>
       <label class="itens" >COntrole de Tração</label>
      <input type="checkbox" name="controleTracao"/>
       <label class="itens" >Desembaçãdor Traseiro</label>
      <input type="checkbox" name="desembacadorTraseiro"/>
       <label class="itens" >Direção Higrtaulica</label>
      <input type="checkbox" name="direcaoHidraulica"/>
       <label class="itens" >DVD Player</label>
      <input type="checkbox" name="dvdPlayer"/>
     <label class="itens" >Encosto Cabeca Traseiro</label>
      <input type="checkbox" name="encostoCabecaTraseiro"/>
   
</br>
</br>
      
     <label class="itens" >Farol Xenonio</label>
      <input type="checkbox" name="farolXenonio"/>
       <label class="itens" >Freio ABS</label>
      <input type="checkbox" name="freioAbs"/>
       <label class="itens" >GPS</label>
      <input type="checkbox" name="gps"/>
       <label class="itens" >Limpador Traseiro</label>
      <input type="checkbox" name="limpadorTraseiro"/>
       <label class="itens" >Radio</label>
      <input type="checkbox" name="radio"/>
       <label class="itens" >Retrovisor Eletrico</label>
      <input type="checkbox" name="retrovisor Eletrico"/>
       <label class="itens" >Roda Liga Leve</label>
      <input type="checkbox" name="rodaLigaLeve"/>
      <label class="itens" >Sensor de Chuva</label>
      <input type="checkbox" name="sensorChuva"/>
      
      </br>
    </br>
      
      <label class="itens" >Sensor Estacionamento</label>
      <input type="checkbox" name="sensorEstacionamento"/>
       <label class="itens" >Teto Solar</label>
      <input type="checkbox" name="tetoSolar"/>
       <label class="itens" >Tração 4X4</label>
      <input type="checkbox" name="tracao4x4"/>
       <label class="itens" >Travas Eletricas</label>
      <input type="checkbox" name="travasEletricas"/>
       <label class="itens" >Vidros Eletricos</label>
      <input type="checkbox" name="vidrosEletricos"/>
       <label class="itens" >Volante C/ Regulagem Altura</label>
      <input type="checkbox" name="voltanteRegulagemAltura"/>
  </div>
  <hr>

  <div  class="col-sm-3" >
         <input type="submit" class="btn btn-lg btn-success" value="Salvar">
  </div>
  </div>
 {{Form::close()}}
               
</div><!--/row-->
</div>
 @stop