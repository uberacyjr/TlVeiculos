@extends('admin.area_administrativa')

@section('conteudoAdmin')



<div class="bs-example">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Placa</th>
          <th>Preço</th>
          <th>Quilometragem</th>
          <th>Ano</th>
        </tr>
      </thead>
      <tbody>
        @foreach($imagem as $imagens)
        <tr>
          <td>{{ $imagens->idCars }}</td>
 
        </tr>
        @endforeach
     

      </tbody>
    </table>
  </div>
  @stop