@extends('layouts.plantilla')
@section('content')
    <div class="box">

        <table class="table">
            <thead>
                <tr>
                    <th>Plan de Estudio</th>
                    <th>Carrera</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($planes as $item)
                    <tr>
                        <td>{{ $item->clave_plan_estudio }}</td>
                        <td>{{ $item->carrera }}</td>
                        <td>
                            <div class="buttons">
                                <button class="button is-warning">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="button is-danger">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    <tr>
                @endforeach
            </tbody>
        </table>

        <button class="js-modal-trigger" data-target="modal-js-example">
            Open JS example modal
        </button>


        <div id="modal-js-example" class="modal">
            <div class="modal-background"></div>

            <div class="modal-content">
                <div class="box">
                    <p>Modal JS example</p>
                    <!-- Your content -->
                </div>
            </div>

            <button class="modal-close is-large" aria-label="close"></button>
        </div>


    </div>
@endsection
