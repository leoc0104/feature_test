@extends('templates.template')

@section('content')
    <h1 class="text-center mt-5 mb-5">Tela de cadastro</h1>

    <hr />

    <div class="col-8 m-auto">
        <br />

        <form action="{{route('image_list.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <input class="form-control" type="text" name="username" id="username" placeholder="Usuário"> <br />

            <select class="form-control" name="action" id="action" >
                <option value="1">-- Selecione uma ação --</option>
                <option value="2">Redimensionar</option>
                <option value="3">Recortar</option>
            </select>

            <br />

            <input class="form-control" type="text" name="width" id="width" placeholder="Largura"> <br />

            <input class="form-control" type="text" name="height" id="height" placeholder="Altura"> <br />

            <input class="form-control-file" type="file" name="image" id="image">

            <br />

            <button class="btn btn-primary" type="submit" value="ENVIAR">ENVIAR</button>
        </form>
    </div>

@endsection
