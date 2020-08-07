@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><span class="text-muted">Editanto la categoria: </span>{{$category->name}}
                        <a href="/categories" class="btn btn-secondary btn-sm float-right">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="/categories/{{ $category->id }}" method="post">
                            @CSRF
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nombre categoria</label>
                                <input name="name" type="text" class="form-control"
                                       id="name" aria-describedby="nameHelp"
                                       placeholder="Modifica la nombre" value=" {{ old('name', $category->name) }}"
                                >
                                <small id="nameHelp" class="form-text text-muted">
                                    Escribe el nombre que deseas ponerle a la categoria.
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar categoria</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
