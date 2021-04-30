<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
     crossorigin="anonymous">
@if( Request::is('*/edit'))
                    <div class="row w-100 justify-content-center align-items-center">
                    <form class="col-12" action="{{ url('livros/update') }}/{{ $livro->id }}" method="post">
                    @csrf
                      <div class="form-group ">
                        <label class="form-control" >Titulo</label>
                        <input type="text" name="titulo" class="form-control" value="{{ $livro->titulo  }}">
                      </div>

                      <div class="form-group">
                        <label class="form-control">Autor</label>
                        <input type="text" name="autor" class="form-control" value="{{ $livro->autor }}">
                      </div>

                      <div class="form-group">
                        <label class="form-control">Preço</label>
                        <input type="text" name="preco" class="form-control" value="{{ $livro->preco }}">
                      </div>
                        <br>
                        <div class=" text-center">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                      
                    </form>
                    </div>
                    
@endif