@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Agregando preguntas al examen
                        <a href="#" class="btn btn-secondary btn-sm float-right">Regresar</a>
                    </div>
                    <div class="card-body">
                    <form action="exams/{{$exams->id}}/questions" method="POST" enctype="multipart/form-data">
                        @CSRF
                        <input type="hidden" name="exam_id" value="{{$exams->id}}">
                        {{--<input type="hidden" name="user_id" value="{{auth()->user()->id}}">--}}
                        <div class="form-group">
                            <label for="description">Descripcion de la pregunta*</label>
                            <textarea name="description" type="text"
                                      class="form-control" id="description"
                                      aria-describedby="descriptionHelp"
                                      placeholder="Inserte la pregunta">{{ old('description') }}</textarea>
                            <small id="descriptionHelp"
                                   class="form-text text-muted">Escribe la descripcion de la pregunta.</small>
                        </div>
                        <div class="form-group">
                            <label for="iframe">Video asociado *</label>
                            <textarea name="iframe" type="text"
                                      class="form-control" id="iframe"
                                      aria-describedby="iframeHelp"
                                      placeholder="Inserte la URL del video">{{ old('iframe') }}</textarea>
                            <small id="iframeHelp" class="form-text text-muted">Inserta la url del video.</small>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="image">Imagen asociada</label>
                            <input name="image" type="file" class="py-1">
                        </div>
                        <div class="form-group">
                            <label for="category">A que categoria pertenece</label>
                            <select name="category" class="form-control form-control-lg" id="category">
                                @foreach($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <small id="selectHelp" class="form-text text-muted">Elige una categoria.</small>
                        </div>
                        <hr />
                        <button type="submit" class="btn btn-primary">Guardar pregunta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
