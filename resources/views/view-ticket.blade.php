
@extends('layouts.base')

@section('content')
<h1>Jouw Tickets</h1>
<div class="row row-cols-4">
    @foreach ($tickets as $ticket)
        @foreach($events as $event)
            @if (Auth::user()->id == $ticket->user_id && $ticket->event_id == $event->id) 
            
                <div class="card m-10" style="width: 18rem;">
                    <img src="{{$event->foto}}" class="card-img-top" alt="event picture">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->name}}</h5>
                        <p class="card-text">Beschrijving: {{$event->description}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Startdatum: {{$event->event_start}}</li>
                        <li class="list-group-item">EindDatum: {{$event->event_end}}</li>
                        <li class="list-group-item">Locatie: {{$event->location}}</li>
                    </ul>
                    <div class="card-body">
                        <h3><a class ="bi-trash" id="delete" href={{route('delete_ticket', $ticket->id)}}>Delete ticket</a></h3>
                        
                    </div>
                    
                </div>
            
            
            @endif
        @endforeach
    @endforeach
</div>

@endsection