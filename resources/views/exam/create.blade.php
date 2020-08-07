@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Creando tu examen
                        <a href="/exams" class="btn btn-secondary btn-sm float-right">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="/exams" method="POST">
                            @CSRF
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="form-group">
                                <label for="title">Titulo del examen</label>
                                <input name="title" type="text" class="form-control"
                                       id="title" aria-describedby="titleHelp"
                                       placeholder="Inserta el titulo"
                                       value="{{ old('title') }}" >
                                <small id="titleHelp" class="form-text text-muted">
                                    Escribe el nombre que deseas ponerle al examen.
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="description">Descripcion del examen</label>
                                <input name="description" type="text" class="form-control" id="description"
                                       aria-describedby="descriptionHelp"
                                       placeholder="Inserte la descripcion"
                                       value="{{ old('description') }}" >
                                <small id="descriptionHelp" class="form-text text-muted">
                                    Ingresa la descripcion que deseas ponerle al examen.
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="score">Puntaje total</label>
                                <input name="score" type="number" class="form-control" id="score"
                                       aria-describedby="codeHelp" placeholder="Inserte el puntaje"
                                       value="{{ old('score') }}" min="0" max="100">
                            </div>
                            <button type="submit" class="btn btn-primary">Terminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
