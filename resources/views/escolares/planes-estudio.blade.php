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
                                <button class="button is-warning js-modal-trigger" data-target="modal-{{ $item->id }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="button is-danger ">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                            
                            <div id="modal-{{ $item->id }}" class="modal">
                                <div class="modal-background"></div>
                    
                                <div class="modal-content">
                                    <div class="box">
                                        <p class="title is-5 has-text-centered">Modificar Plan de Estudio</p>
                                        <form method="GET" action="{{ route('PlanesEstudioEditar') }}">
                                            @csrf
                                            <div class="field">
                                                <label class="label">Clave del Plan de Estudios:</label>
                                                <div class="control">
                                                    <input class="input" type="text" value="{{$item->clave_plan_estudio }}">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label class="label">Nombre de la carrera:</label>
                                                <div class="control">
                                                    <input class="input" type="text" value="{{$item->carrera }}"> 
                                                </div>
                                            </div>
                    
                                            <div class="has-text-centered">
                                                <button class="button is-primary" type="submit">Guardar</a>
                                            </div>
                                        </form>
                                        <!-- Your content -->
                                    </div>
                                </div>
                    
                                <button class="modal-close is-large" aria-label="close"></button>
                            </div>

                        </td>
                    <tr>
                @endforeach
            </tbody>
        </table>

        


    </div>
@endsection
