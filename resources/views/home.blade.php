@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Dashboard
                    <a class="btn btn-dark btn-sm float-right"
                       href="{{ route('exams.index') }}" title="Crear nuevo examen">Ir a examens</a>
                        {{--/exams--}}
                </div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    ¡Bienvenido de nuevo {{$user->name}}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
