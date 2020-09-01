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
              <span class="text-muted">Respuestas de la pregunta:</span> {{$questions->description}}
              <a href="{{ route('answers.create', [$exams->id, $questions->id] ) }}"
                 class="btn btn-success btn-sm float-right"
                 title="Agregar nueva pregunta">
                  Agregar nueva respuesta
              </a>
              <a href="{{ route('questions.index', [$exams->id, $questions->id]) }}"
                 class="btn btn-secondary btn-sm float-left mr-2">
                  Regresar
              </a>
          </div>
          <div class="card-body">
              <table class="table">
                  <input type="hidden" name="question_id" value="{{$questions->id}}" />
                  <thead class="thead" >
                      <tr>
                          <th>ID</th>
                          <th>Descripcion</th>
                          <th>Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($questions->answers as $answer)
                      <tr>
                          <td>{{ $answer->id }}</td>
                          <td>{{ $answer->description }}</td>
                          <td>
                              <a href="{{ route('answers.edit', [$exams->id, $questions->id, $answer->id]) }}"
                                 class="btn btn-warning btn-sm"><i class="far fa-edit"></i>
                              </a>
                              <a href="{{ route('answers.confirmDelete', [$exams->id, $questions->id, $answer->id]) }}"
                                 class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
                              </a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  @endsection
