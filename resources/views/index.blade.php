@extends('templates.template')

@section('content')
  <h1 class="text-center mt-5 mb-5">IMAGENS</h1>

  <hr />

  <div class="text-center mt-4 mb-4">
    <a href="{{url('students/create')}}">
      <button class="btn btn-success">CADASTRAR</button>
    </a>
  </div>

  <div class="col-8 m-auto">
    @csrf

    <table border="1" class="table text-center">
      <tr>
          <th>ID</th>
          <th>Usuário</th>
          <th>Nome</th>
          <th>Ação</th>
          <th>Caminho</th>
          <th>Caminho original</th>
          <th>Data/hora de criação</th>
      </tr>
      <tr>
          <td>1</td>
          <td>Chris</td>
          <td>Wallpaper.png</td>
          <td>Resize</td>
          <td><a href="#">http://localhost:8000/images/processed/chris/{uuid}_wallpaper.png</a></td>
          <td><a href="#">http://localhost:8000/images/original/chris/{uuid}_wallpaper.png</a></td>
          <td>04/05/2023 10:54:30</td>
      </tr>
      <tr>
          <td>2</td>
          <td>Leo</td>
          <td>Demon_Slayer_Inosuke.jpg</td>
          <td>Crop</td>
          <td><a href="#">http://localhost:8000/images/processed/leo/{uuid}_demon_slayer_inosuke.jpg</a></td>
          <td><a href="#">http://localhost:8000/images/original/leo/{uuid}_demon_slayer_inosuke.jpg</a></td>
          <td>04/05/2023 10:56:00</td>
      </tr>
    </table>

    {{}}
  </div>
@endsection