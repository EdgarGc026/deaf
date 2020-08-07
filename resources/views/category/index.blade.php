@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Categoria para las preguntas
                        <a href="categories/create" class="btn btn-dark btn-sm float-right">Crear nueva categoria</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead">
                            <tr>
                                <th>ID</th>
                                <th>Nombre categoria</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="/categories/{{$category->id}}/edit" class="btn btn-warning btn-sm" title="Editar"><i class="far fa-edit"></i></a>
                                        <a href="/categories/{{$category->id}}/confirmDelete" class="btn btn-danger btn-sm" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
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
