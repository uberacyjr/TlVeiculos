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
        @foreach($carro as $cars)
        <tr>
          <td>{{ $cars->placaCarro }}</td>
          <td>{{ $cars->precoCarro }}</td>
          <td>{{ $cars->quilometragemCarro }}</td>
          <td>Ano</td>
        </tr>
        @endforeach
     

      </tbody>
    </table>
  </div>
  @stop