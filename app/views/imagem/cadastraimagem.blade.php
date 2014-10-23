@extends('admin.area_administrativa')

@section('conteudoAdmin')

<h1>Cadastrar imagem para o carro <b>{{ $nome->descModelos}}</b> de placa <b>{{ $car->placaCarro}}</b></h1>
{{ Form::open(array('route' => 'image.store', 'class' => 'dropzone', 'id'=> 'my-awesome-dropzone', 'files' => true )) }}
	<input type="hidden" value="{{$car->idCars }}" name="idCarro"/>
 {{Form::close()}}
@stop