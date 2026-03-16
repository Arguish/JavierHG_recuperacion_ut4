@extends('adminlte::page')

@section('title', 'Ticket')

@section('content_header')
<h1>Ticket</h1>
@stop

@section('content')

@if(session('ok'))
<p>Incidencia registrada correctamente</p>
@endif
<form method="POST" action="{{ url('/tick') }}">
    @csrf



    <!-- Sección: Información Básica -->
    <fieldset>
        <legend>Información Básica</legend>

        <!-- Nombre del Jugador (PRIMERO) -->
        <div>
            <label for="titulo">
                Titulo
            </label>
            <input
                id="titulo"
                type="text"
                name="titulo"
                required
                placeholder="titulo">
        </div>
        <div>
            <label for="descripcion">
                Descripción
            </label>
            <input
                id="descripcion"
                type="text"
                name="descripcion"
                required
                placeholder="...">
        </div>
        <div>
            <label for="prioridad">
                Prioridad
            </label>
            <input
                id="prioridad"
                type="text"
                name="prioridad"
                required
                placeholder="Alta/Media/Baja">
        </div>
        <div>
            <label for="tecnico">
                Técnico Asignado
            </label>
            <input
                id="tecnico"
                type="text"
                name="tecnico"
                required
                placeholder="Nombre">
        </div>
        <!-- Botones de Acción -->
        <div class="flex gap-4 pt-6">
            <button
                type="submit">
                Enviar
            </button>
        </div>
</form>

@if ($ticks)
<h1>LLega ticks</h1>
<li>{{ var_dump($ticks) }}</li>

@endif



@stop