@extends('templates.template')

@section('content')
  <h1 class="text-center mt-5 mb-5">IMAGENS</h1>

  <hr />

  <div class="text-center mt-4 mb-4">
    <a href="{{url('students/action')}}">
      <button class="btn btn-success">CADASTRAR</button>
    </a>
  </div>

  <div class="col-8 m-auto">
    @csrf

    <table class="table text-center">
      <thead class = "thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Usuário</th>
          <th scope="col">Nome</th>
          <th scope="col">Ação</th>
          <th scope="col">Caminho</th>
          <th scope="col">Caminho original</th>
          <th scope="col">Data e hora de cadastro</th>
        </tr>
      </thead>
      
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Chris</td>
          <td>Wallpaper.png</td>
          <td>Resize</td>
          <td><a href="#">http://localhost:8000/images/processed/chris/{uuid}_wallpaper.png</a></td>
          <td><a href="#">http://localhost:8000/images/original/chris/{uuid}_wallpaper.png</a></td>
          <td>04/05/2023 10:54:30</td>
      </tr>
    </table>

    {{}}
  </div>
@endsection