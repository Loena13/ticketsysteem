@extends('layouts.base')

@section('content')
    @foreach($events as $event)
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card_title">{{$event->event_name}}</h5>
                <p class="card-text"><b id="eventinfo">Datum:</b>{{$event->event_start}}</p>
                <p class="card-text"><b id="eventinfo">Einddatum:</b>{{$event->event_end}}</p>
                <p class="card-text"><b id="eventinfo">Location:</b>{{$event->location}}</p>
                <p class="card-text"><b id="eventinfo">Preorder prijs:</b>{{$event->preorder_price}}</p>
                <a href="checkout" class="btn">Bestel Tickets!</a>
                @if (Auth::user())
                <a href="edit" class="btn">Edit Tickets</a>
                <a href="delete" class="btn">Delete Ticket</a>
                @endif
            </div>
        </div>
    </div>
    @endforeach

@endsection
