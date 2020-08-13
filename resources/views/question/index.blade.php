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
                        <a class="black-text" href="/exams">Examen</a>
                        <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                    </li>
                    <li class="breadcrumb-item active">Visualizar</li>
                </ol>
            </nav>
        </div>
        <div class="card mb-4">
            <div class="card-header text-center"><span class="text-muted">Preguntas del examen:</span>{{$exams->title}}
                <a href="/exams/{{$exams->id}}/questions/create"
                   class="btn btn-success btn-sm float-right"
                   title="Agregar nueva pregunta">
                    Agregar nueva pregunta
                </a>
                <a href="/exams"
                   class="btn btn-secondary btn-sm float-left mr-2">
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th>ID</th>
                            <th>Descripcion</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>{{$question->id}}</td>
                            <td>{{$question->description}}</td>
                            <td>{{$question->category->name}}</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i></a>
                                <a href="#" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
