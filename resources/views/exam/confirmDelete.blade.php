@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span>Eliminar examen: {{$exams->title}}</span>
                        <a href="/exams" class="btn btn-secondary btn-sm float-right">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('exams.destroy', $exams->id)}}" method="POST">
                            {{--/exams/{{$exams->id}}--}}
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
