@extends('admin.area_administrativa')

@section('conteudoAdmin')

           
<style>
  .itens{

   margin-left:16px;
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
   <div class="form-group">
    <label for="vendido" class="col-sm-2 control-label">Vendido</label>
    <div class="col-sm-3">
      <select class="form-control" name="vendido">
              <option value="1"  <?php if ($car->vendido == 1){ echo "selected"; } ?>>
          não
        </option>
        <option value="2" <?php if ($car->vendido == 2){ echo "selected"; } ?>>
          sim
        </option>
    
      </select>
    </div>
  </div>
     <div class="form-group">
    <label for="precoCarro" class="col-sm-2 control-label">Observação</label>
    <div class="col-sm-3">
       <textarea class="form-control" rows="4" id="obs" name="obs">{{ $car->obs}}</textarea> 
    </div>
  </div>
  <hr>
  
   <div class="form-group">
      <h4>Opcionais</h4>
    <label class="itens" >Air Bag</label>
    <input type="checkbox" name="airBag" <?php if ($item->airBag == 1){ echo "checked"; } ?> />

    <label class="itens" >Alarme</label>
    <input type="checkbox" name="alarme" <?php if ($item->alarme == 1){ echo "checked"; } ?>/>

    <label class="itens" >Banco de Couro</label>
    <input type="checkbox" name="bancoCouro" <?php if ($item->bancoCouro == 1){ echo "checked"; } ?>/>

    <label class="itens" >Capota Maritima</label>
    <input type="checkbox" name="capotaMaritima" <?php if ($item->capotaMaritima == 1){ echo "checked"; } ?>/>


    <label class="itens" >Ar Condicionado</label>
    <input type="checkbox" name="arCondicionado" <?php if ($item->arCondicionado == 1){ echo "checked"; } ?>/>

    <label class="itens" >Banco Motorista Ajuste Altura</label>
    <input type="checkbox" name="bancoMotoristaAjusteAltura" <?php if ($item->bancoMotoristaAjusteAltura == 1){ echo "checked"; } ?>/>

    <label class="itens" >CD Player</label>
    <input type="checkbox" name="cdPlayer" <?php if ($item->cdPlayer == 1){ echo "checked"; } ?>/>

    <label class="itens" >Computador de Bordo</label>
    <input type="checkbox" name="computadorBordo" <?php if ($item->computadorBordo == 1){ echo "checked"; } ?>/>
</br>
</br>
      
       <label class="itens" >Controle Automatico Velocidade</label>
      <input type="checkbox" name="controleAutomaticoVelocidade"  <?php if ($item->controleAutomaticoVelocidade == 1){ echo "checked"; } ?>/>
       <label class="itens" >Controle de Tração</label>
      <input type="checkbox" name="controleTracao" <?php if ($item->controleTracao == 1){ echo "checked"; } ?>/>
       <label class="itens" >Desembaçãdor Traseiro</label>
      <input type="checkbox" name="desembacadorTraseiro" <?php if ($item->desembacadorTraseiro == 1){ echo "checked"; } ?>/>
       <label class="itens" >Direção Hidráulica</label>
      <input type="checkbox" name="direcaoHidraulica" <?php if ($item->direcaoHidraulica == 1){ echo "checked"; } ?>/>
       <label class="itens" >DVD Player</label>
      <input type="checkbox" name="dvdPlayer" <?php if ($item->dvdPlayer == 1){ echo "checked"; } ?>/>
     <label class="itens" >Encosto Cabeca Traseiro</label>
      <input type="checkbox" name="encostoCabecaTraseiro" <?php if ($item->encostoCabecaTraseiro == 1){ echo "checked"; } ?>/>
   
</br>
</br>
      
     <label class="itens" >Farol Xenonio</label>
      <input type="checkbox" name="farolXenonio"  <?php if ($item->farolXenonio == 1){ echo "checked"; } ?>/>
       <label class="itens" >Freio ABS</label>
      <input type="checkbox" name="freioAbs"  <?php if ($item->freioAbs == 1){ echo "checked"; } ?>/>
       <label class="itens" >GPS</label>
      <input type="checkbox" name="gps"  <?php if ($item->gps == 1){ echo "checked"; } ?>/>
       <label class="itens" >Limpador Traseiro</label>
      <input type="checkbox" name="limpadorTraseiro"  <?php if ($item->limpadorTraseiro == 1){ echo "checked"; } ?>/>
       <label class="itens" >Radio</label>
      <input type="checkbox" name="radio"  <?php if ($item->radio == 1){ echo "checked"; } ?>/>
       <label class="itens" >Retrovisor Eletrico</label>
      <input type="checkbox" name="retrovisorEletrico"  <?php if ($item->retrovisorEletrico == 1){ echo "checked"; } ?>/>
       <label class="itens" >Roda Liga Leve</label>
      <input type="checkbox" name="rodaLigaLeve"  <?php if ($item->rodaLigaLeve == 1){ echo "checked"; } ?>/>
      <label class="itens" >Sensor de Chuva</label>
      <input type="checkbox" name="sensorChuva"  <?php if ($item->sensorChuva == 1){ echo "checked"; } ?>/>
      
      </br>
    </br>
      
      <label class="itens" >Sensor Estacionamento</label>
      <input type="checkbox" name="sensorEstacionamento"  <?php if ($item->sensorEstacionamento == 1){ echo "checked"; } ?>/>
       <label class="itens" >Teto Solar</label>
      <input type="checkbox" name="tetoSolar" <?php if ($item->tetoSolar == 1){ echo "checked"; } ?>/>
       <label class="itens" >Tração 4X4</label>
      <input type="checkbox" name="tracao4x4" <?php if ($item->tracao4x4 == 1){ echo "checked"; } ?>/>
       <label class="itens" >Travas Elétricas</label>
      <input type="checkbox" name="travasEletricas" <?php if ($item->travasEletricas == 1){ echo "checked"; } ?>/>
       <label class="itens" >Vidros Elétricos</label>
      <input type="checkbox" name="vidrosEletricos" <?php if ($item->vidrosEletricos == 1){ echo "checked"; } ?>/>
       <label class="itens" >Volante C/ Regulagem Altura</label>
      <input type="checkbox" name="voltanteRegulagemAltura" <?php if ($item->voltanteRegulagemAltura == 1){ echo "checked"; } ?>/>
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