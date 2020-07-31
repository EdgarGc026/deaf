@extends('layouts.app')

@section('content')
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
