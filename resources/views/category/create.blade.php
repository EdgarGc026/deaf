@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Crear categoria
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm float-right">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="post">
                            @CSRF
                            <div class="form-group">
                                <label for="name">Nombre de la categoria</label>
                                <input name="name" type="text" class="form-control"
                                       id="name" aria-describedby="nameHelp"
                                       placeholder="Modifica la nombre" value=" {{ old('name') }}"
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
