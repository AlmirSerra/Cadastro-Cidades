@extends('layout.main')

@section('title', 'Cidades')

@section('content')
<div id="" class="col-md-12">
    <h1>Lista de Cidades</h1>
      <form action=""/ method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar cidade...">
        <input type="checkbox" name="cidade">
        <label for="cidade">Cidade</label>
        <input type="checkbox" name="estado">
        <label for="estado">Estado</label>
      </form>
  </div>
  <div class="col-md-10 offset-md-1">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Cidade</th>
          <th scope="col">Estado</th>
          <th scope="col">Data de Fundação</th>
        </tr>
    </thead>
      <th>
        @foreach($cities as $city)
          <td>{{ $city->cidade }}</td>
          <td>{{ $city->estado }}</td>
          <td>{{ date('d/m/Y', strtotime($city->data_de_fundacao)) }}</td>
        @endforeach
    </th>
   </table>
  </div>

@endsection