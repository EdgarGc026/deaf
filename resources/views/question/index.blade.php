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
        </div>
    </div>
@endsection
{{--    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Agregar preguntas
                        <a href="" class="btn btn-dark btn-sm float-right">Crear nuevo examen</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Puntaje</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{$exam->title}}</td>
                                    <td>{{$exam->description}}</td>
                                    <td>{{$exam->score}}</td>
                                    <td>
                                        <a href="/exams/{{$exam->id}}" class="btn btn-success btn-sm" title="Abrir examen"><i class="fas fa-plus-square"></i></a>
                                        <a href="/exams/{{$exam->id}}/edit" class="btn btn-warning btn-sm" title="Editar"><i class="far fa-edit"></i></a>
                                        <a href="/exams/{{$exam->id}}/confirmDelete" class="btn btn-danger btn-sm" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

