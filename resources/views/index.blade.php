@extends('templates.template')

@section('title')
    Crud com Laravel
@endsection

@section('content')
    <h1 class="text-center">Crud</h1>
   
    <div class=" justify-content-center">
    <table class="table text-center">
        <thead class="table-dark">
            <tr> 
            
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($livro as $livros)
          
          <tr>
           
            <td>{{$livros->titulo}}</td>
            <td>{{$livros->autor}}</td>
            <td>{{$livros->preco}}</td>
            <td>              
                <a href="livros/{{$livros->id}}/edit">
                <button class="btn btn-primary">Editar</button>
                </a>
                </td>
            <td>
                <form action="/livros/delete/{{ $livros->id }}" method="post">
                @csrf
                 @method('delete')
                <button class="btn btn-danger">Deletar</button>
                </form>
            </td>
            </tr> 
        @endforeach
                    
        </tbody>
    </table>
        </div>
        <div class="text-center mt-3 mb-4">
        <form class="form-inline justify-content-center" name="formCad" id="formCad" method="POST" action="{{ url('livros/add')}}">
            {{csrf_field()}}
            <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Titulo" >
            <br>
            <input class="form-control" type="text" name="autor" id="autor" placeholder="Autor" >
            <br>
            <input class="form-control" type="text" name="preco" id="preco" placeholder="Preço" >
            <br>
            <input class="btn btn-success" type="submit" value="Cadastrar" >
        </form>
        
    </div>
@endsection