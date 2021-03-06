@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="breadcrumb-main mt-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb cyan lighten-4">
                <li class="breadcrumb-item">
                    <a class="black-text" href="/home">Inicio</a>
                    <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                </li>
                <li class="breadcrumb-item">
                    <a class="black-text" href="{{ route('exams.index') }}">Examen</a>
                    <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-black" href="{{ route('questions.index', [$exams->id])}}">Question</a>
                    <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                </li>
                <li class="breadcrumb-item active">Visualizar</li>
            </ol>
        </nav>
      </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <span class="text-muted"> Respuesta a</span> {{ $questions->description }}
                <a href="{{ route('answers.index', [$exams->id, $questions->id]) }}"
                   class="btn btn-sm btn-secondary float-left mr-2">
                  Regresar
                </a>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('answers.store', [$exams->id, $questions->id]) }}" method="POST">
                    <div class="form-group">
                        <label for="descriptionHelp">Descripcion</label>
                        <textarea name="description" type="text"
                                  class="form-control" id="description"
                                  aria-describedby="descriptionHelp"
                                  placeholder="Inserte la respuesta">{{ old('description') }}</textarea>
                        <small id="descriptionHelp"
                               class="form-text text-muted">Escribe la descripcion de la respuesta.</small>
                    </div>

                    <div class="form-group">
                        <label for="iframeHelp">Link del Video</label>
                        <textarea name="iframe" type="text"
                                  class="form-control" id="iframe"
                                  aria-describedby="iframeHelp"
                                  placeholder="Inserte el video">{{ old('iframe') }}</textarea>
                        <small id="descriptionHelp"
                               class="form-text text-muted">Escribe la descripcion de la pregunta.</small>
                    </div>

                    <div class="form-group d-flex flex-column">
                        <label for="image">Imagen asociada</label>
                        <input name="image" type="file" class="py-1">
                    </div>

                    <div class="form-group">
                      <label>Opciones</label>
                      <select name="is_correct" id="is_correct" class="form-control">
                        <option value="" disabled>Selecciona la opcion</option>
                        <option value="1">Correcta</option>
                        <option value="0">Incorrecta</option>
                      </select>
                    </div>
                    @CSRF
                    <button type="submit" class="btn btn-primary">Guardar respuesta</button>
                </form>
            </div>
        </div>
  </div>
@endsection
