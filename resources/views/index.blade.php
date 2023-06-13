@extends('templates.template')

@section('content')
    <h1 class="text-center mt-5 mb-5">IMAGENS</h1>

    <hr />

    <div class="text-center mt-4 mb-4">
        <a href="{{route('image_list.create')}}">
            <button class="btn btn-success">CADASTRAR</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf

<<<<<<< Updated upstream
    <table class="table text-center">
      <thead class="thead-dark">
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
        @foreach ($images as $image)
          <tr>
            <th scope="row">{{$image->id}}</th>
            <td>{{$image->username}}</td>
            <td>{{$image->name}}</td>
            <td>{{$image->action}}</td>
            <td><a href="#"></a></td>
            <td><a href="#"></a></td>
            <td></td>
          </tr>
        @endforeach
      </tbody>
    </table>

    
  </div>
@endsection
=======
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col">Nome</th>
                <th scope="col">Ação</th>
                <th scope="col">Caminho</th>
                <th scope="col">Caminho da imagem original</th>
                <th scope="col">Data e hora de cadastro</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($images as $image)
                <tr>
                    <th scope="row">{{$image->id}}</th>
                    <td>{{$image->username}}</td>
                    <td>{{$image->image.$image->extension}}</td>
                    <td>{{$image->action}}</td>
                    <td><a href="{{Storage::url($image->path)}}">{{$image->path}}</a></td>
                    <td><a href="#">{{$image->original_image_path}}</a></td>
                    <td>{{$image->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
>>>>>>> Stashed changes
