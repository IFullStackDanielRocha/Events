@extends('layouts.main')

@section('title', 'Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque evento</h1>
    <form action="">
        <input type="text" class="form-control" id="seach" name="search" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                @if($event->image == null)
                    <img src="https://via.placeholder.com/1220x720.png/" alt="{{$event->title}}">
                @else
                    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                @endif
                <div class="card-body">
                    <p class="card-date">10/09/2020</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{$event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>


        @endforeach
    </div>
</div>
<!--<img src="https://via.placeholder.com/1920x720.png/" alt="">-->





@endsection