@extends('layouts.plantilla')
@section('content')
    <div class="box">
        <p class="title is-3 has-text-centered">Planes de estudio</p>
        
        <div class="buttons">
            <a href="{{route('home')}}" class="button is-danger">
                <i class="fa-solid fa-arrow-left"></i>&nbsp;Regresar
            </a>
            <a class="button is-primary">
                <i class="fa-solid fa-plus"></i>&nbsp;Nuevo Plan
            </a>
        </div>

        @if (session('Correcto'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ session('Correcto') }}
            </div>
        @endif
        @if (session('Incorrecto'))
            <div class="notification is-danger">
                <button class="delete"></button>
                {{ session('Incorrecto') }}
            </div>
        @endif

        <table class="table is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Plan de Estudio</th>
                    <th>Carrera</th>
                    <th class="has-text-centered">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($planes as $item)
                    <tr>
                        <td>{{ $item->clave_plan_estudio }}</td>
                        <td>{{ $item->carrera }}</td>
                        <td>
                            <div class="has-text-centered">
                                <button class="button is-warning js-modal-trigger" data-target="modal-{{ $item->id }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="button is-danger">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>

                            <div id="modal-{{ $item->id }}" class="modal">
                                <div class="modal-background"></div>

                                <div class="modal-content">
                                    <div class="box">
                                        <p class="title is-5 has-text-centered">Modificar Plan de Estudio</p>
                                        <form method="GET" action="{{ route('planEstudioUpdate', $item->id) }}">
                                            @csrf
                                            <div class="field">
                                                <label class="label">Clave del Plan de Estudios:</label>
                                                <div class="control">
                                                    <input class="input" type="text" name="txtClave"
                                                        value="{{ $item->clave_plan_estudio }}">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label class="label">Nombre de la carrera:</label>
                                                <div class="control">
                                                    <input class="input" type="text" name="txtCarrera"
                                                    value="{{ $item->carrera }}">
                                                </div>
                                            </div>

                                            <div class="has-text-centered">
                                                <button class="button is-primary" type="submit">Guardar</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <button class="modal-close is-large" aria-label="close"></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>




    </div>
@endsection
