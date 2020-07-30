@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Agregando preguntas al examen
                        <a href="/exams" class="btn btn-secondary btn-sm float-right">Regresar</a>
                    </div>

                    <div class="card-body">
                        <form action="/exams/{{$exams->id}}/questions" method="post" enctype="multipart/form-data">
                            @CSRF
                            <div class="form-group">
                                <label for="description">Descripcion de la pregunta*</label>
                                <textarea name="description" type="text"
                                          class="form-control" id="description"
                                          aria-describedby="descriptionHelp"
                                          placeholder="Inserte la pregunta">{{ old('question.description') }}</textarea>
                                <small id="descriptionHelp"
                                       class="form-text text-muted">Escribe la descripcion de la pregunta.</small>
                            </div>
                            <div class="form-group">
                                <label for="iframe">Video asociado *</label>
                                <textarea name="iframe" type="text"
                                          class="form-control" id="iframe"
                                          aria-describedby="iframeHelp"
                                          placeholder="Inserte la URL del video">{{ old('question.iframe') }}</textarea>
                                <small id="iframeHelp" class="form-text text-muted">Inserta la url del video.</small>
                            </div>

                            <div class="form-group d-flex flex-column">
                                <label for="image">Imagen asociada</label>
                                <input name="image" type="file" class="py-1">
                            </div>
                            <div class="form-group">
                                <label for="category">A que categoria pertenece</label>
                                <select class="form-control form-control-lg" id="selectCategory">
                                    <option>Pensamiento matematico</option>
                                    <option>Pensamiento analitico</option>
                                    <option>Estructura de la lengua</option>
                                    <option>Comprension lectora</option>
                                </select>
                            </div>
                            <hr />
                            <button type="button" class="btn btn-success"
                                    data-toggle="modal" data-target="#answersModal">
                                Agregar pregunta
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="answersModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Agregando respuestas</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <h4 class="text-center">Respuesta #</h4>
                        <div class="form-group">
                            <label for="description">Descripcion</label>
                            <input type="text" class=" form-control input-group-sm" name="" id="" placeholder="Ingresa la respuesta">
                        </div>

                        <div class="form-group">
                            <label for="iframe">Video</label>
                            <textarea class="form-control input-group-sm" name="" id="" placeholder="Link del video"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input name="image" type="file" class="input-group py-1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="disabled btn btn-secondary"><i class="fas fa-arrow-left"> Atras</i></button>
                    <button class="btn btn-primary">Siguiente <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
@endsection
