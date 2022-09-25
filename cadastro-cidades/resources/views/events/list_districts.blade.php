@extends('layout.main')

@section('title', 'Bairros')

@section('content')
  <div id="" class="col-md-12">
    <h1>Lista de Bairros</h1>
      <form action=""/ method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar bairro...">
      </form>
  </div>
  <div class="col-md-10 offset-md-1">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Cidade</th>
          <th scope="col">Bairro</th>
        </tr>
    </thead>
      <th>
        @foreach($district as $district)
          <td>{{ $district->cidade }}</td>
          <td>{{ $district->bairro }}</td>
        @endforeach
    </th>
   </table>
  </div>

@endsection