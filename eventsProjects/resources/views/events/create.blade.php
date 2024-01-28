@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image"> Imagem do evento: </label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title"> Evento: </label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="form-group">
            <label for="private">Evento privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0"> Não </option>
                <option value="1"> Sim </option>
            </select>
        </div>

        <div class="form-group">
            <label for="desc">Descrição: </label>
            <textarea name="description" id="desc" placeholder="O que vai ocorrer no evento" class="form-control"></textarea>
        </div>

        <input type="Submit" class="form-control btn btn-primary mt-2" value="Criar evento">
    </form>
</div>



@endsection