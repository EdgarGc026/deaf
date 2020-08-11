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
                    <li class="breadcrumb-item active">Visualizar</li>
                </ol>
            </nav>
        </div>
        <div class="card mb-4 ">
            <div class="card-header text-center"><span class="text-muted">Mostrando examen: </span>{{$exam->title}}
                <a href="#"
                   class="btn btn-success btn-sm float-right"
                   title="Agregar nueva pregunta">
                    Agregar nueva pregunta
                </a>
                <a href="/#"
                   class="btn btn-secondary btn-sm float-left mr-2">
                    Regresar
                </a>
            </div>
        </div>
    </div>
@endsection
