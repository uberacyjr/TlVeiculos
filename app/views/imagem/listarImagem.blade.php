@extends('admin.area_administrativa')

@section('conteudoAdmin')
	<div class="container">
		<div class="row">
	    <table class="table table-striped">
	      	<thead>
	        <tr>
	          <th>Nome</th>
	          <th>Placa</th>
	          <th>Imagem</th>
	        </tr>
	      </thead>
      <tbody>

   		@foreach($carros as $carro)
   		<tr>
   			<td>
				
			{{$carro->descModelos}}

			</td>
			<td>
				{{$carro->placaCarro}}
			</td>
			<td>
				Visualizar
			</td>
		</tr>

			@endforeach
		</tbody>
   	</table>
		</div>
	</div>	
@stop