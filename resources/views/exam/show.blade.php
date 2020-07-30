@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="breadcrumb-main mt-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb cyan lighten-4">
                    <li class="breadcrumb-item">
                        <a class="black-text" href="/home">Inico</a>
                        <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="black-text" href="/exams">Exam</a>
                        <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                    </li>
                    <li class="breadcrumb-item active">View as</li>
                </ol>
            </nav>
        </div>

        <div class="card mb-4 ">
            <div class="card-header text-center">{{$exam->title}}
                <a href="/exams" class="btn btn-secondary btn-sm float-right">Regresar</a>
            </div>
            <div class="card-body d-flex justify-content-between">
                <a href="/exams/{{$exam->id}}/questions/create" class="btn btn-success" title="Agregar nueva pregunta">Agregar nueva pregunta</a>
                <a href="#" class="btn btn-warning">Editar Preguntas</a>
                <a href="#" class="btn btn-danger ">Eliminar Preguntas</a>
            </div>
        </div>
@endsection
