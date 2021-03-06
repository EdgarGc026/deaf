@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span>Eliminar categoria: {{$category->name}}</span>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm float-right">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            {{--/categories/{{$category->id}}--}}
                            @Csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿En verdad deseas eliminarlo?')">Eliminar examen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
