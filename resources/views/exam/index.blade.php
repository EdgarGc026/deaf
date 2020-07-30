@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Crear examen
                        <a href="/exams/create" class="btn btn-dark btn-sm float-right">Crear nuevo examen</a>
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
                            @foreach($exams as $exam)
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
    </div>
@endsection
