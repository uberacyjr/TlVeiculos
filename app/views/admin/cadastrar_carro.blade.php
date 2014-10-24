@extends('admin.area_administrativa')

@section('conteudoAdmin')


           
<style>
  .itens{

   margin-left:4px;
 }
</style>

      <div class="container">
    <div class="row">
         
     <strong><i class="glyphicon glyphicon-dashboard"></i> Cadastrar carro</strong>
      
        <hr>
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
      <input type="text" class="form-control" name="descModelos" id="modelo" placeholder="Nome do Carro" required>
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
      <input type="text" class="form-control" name="placaCarro" id="placaCarro" placeholder="Placa" required>
    </div>
  </div>
  <div class="form-group">
    <label for="anoModelo" class="col-sm-2 control-label">Ano</label>
    <div class="col-sm-3">
      <input type="number" class="form-control" name="anoModelo" id="anoModelo" placeholder="Ano" required min='1800' max='2018'>
    </div>
  </div>
    <div class="form-group">
    <label for="quilometragemCarro" class="col-sm-2 control-label">Quilometragem</label>
    <div class="col-sm-3">

      <input type="number" class="form-control" name="quilometragemCarro" id="quilometragemCarro" placeholder="Quilometragem" required min="0">
    </div>
  </div>
    <div class="form-group">
    <label for="precoCarro" class="col-sm-2 control-label">Preço</label>
    <div class="col-sm-3">
      <input type="number" class="form-control" name="precoCarro" id="precoCarro" placeholder="Preço" required min='0'>
    </div>
  </div>
  <hr>
   <div class="table-responsive">
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
               
      </div>
     
      </div><!--/row-->
 @stop