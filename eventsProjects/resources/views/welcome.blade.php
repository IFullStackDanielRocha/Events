@extends('layouts.main')

@section('title', 'Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque evento</h1>
    <form action="/"  method="get">
        <input type="text" class="form-control" id="seach" name="search" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{$search}}</h2>
    @else
        <h2>Próximos eventos:</h2>
    @endif

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
                    <p class="card-date">{{date('d/m/Y' , strtotime($event->date))}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">{{count($event->users)}} {{count($event->users) > 1 ? "Participantes" : "Participante"}}</p>
                    <a href="/events/{{$event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>


        @endforeach
        @if(count($events)==0 && $search)
            <p> <strong> Não foi possível encontrar eventos disponível com {{$search}}!</strong>
                <a href="/"> <ion-icon name="help-circle-outline"></ion-icon> Ver todos</a>
            </p>
        @elseif(count($events)==0)
            <p> <ion-icon name="information-circle-outline"></ion-icon> Não há eventos disponíveis! </p>
        @endif
    </div>
</div>
<!--<img src="https://via.placeholder.com/1920x720.png/" alt="">-->





@endsection