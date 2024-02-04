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
            <label for="date">Data do evento:</label>
            <input type="date" id="date" name="date">
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

        <div class="form-group">
            <label for="items"> Adicione itens de infraestrutura: </label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco">Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis">Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open food">Open food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes">Brindes
            </div>
        </div>

        <input type="Submit" class="form-control btn btn-primary mt-2" value="Criar evento">
    </form>
</div>



@endsection