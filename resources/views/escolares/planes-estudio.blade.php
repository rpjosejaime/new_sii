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
                    <tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
