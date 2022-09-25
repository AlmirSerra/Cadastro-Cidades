@extends('layout.main')

@section('title', 'Cadastrar Bairro')

@section('content')

  
  <div id="city-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastrar Bairro</h1>
    <form id="district-form" action="/districts" method="POST">
      @csrf
      <div class="form-group">
        <label for="title">Bairro:</label>
        <input type="text" class="form-control" id="district" name="district" placeholder="Nome do Bairro">
      </div>
      <div class="form-group">
        <label for="title">Cidade a qual pertence:</label>
        <select type="date" class="form-control" id="city" name="city" placeholder="Cidade a qual pertence">
          <option selcted>É necessário associar uma cidade</option>
          @foreach($cities as $city)
            <option value="{{ $city->cidade }}">{{ $city->cidade }}</option>
          @endforeach
        </select>
      </div>
      <input type="submit" class="btn btn-primary" value="create-district">
    </form>

  </div>
@endsection
