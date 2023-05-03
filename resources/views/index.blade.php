@extends('templates.template')

@section('content')
  <h1 class="text-center mt-5 mb-5">CRUD</h1>

  <hr />

  <div class="text-center mt-4 mb-4">
    <a href="{{url('students/create')}}">
      <button class="btn btn-success">CADASTRAR</button>
    </a>
  </div>

  <div class="col-8 m-auto">
    @csrf

    <table class="table text-center">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Apelido</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Idade</th>
          <th scope="col">Altura</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>

      <tbody>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a href="">
                <button class="btn btn-dark">VISUALIZAR</button>
              </a>

              <a href="">
                <button class="btn btn-primary">EDITAR</button>
              </a>

              <a href="" class="js-del">
                <button class="btn btn-danger">DELETAR</button>
              </a>
            </td>
          </tr>
      </tbody>
    </table>    
    {{}}
  </div>
@endsection