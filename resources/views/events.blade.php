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
                <div class="form-button">
                    <form action="{{ Route('display_tickets') }}" method="POST">
                        @csrf
                        <input type="hidden" id="event" name="event" value="{{$event->id}}">
                        <button type="submit" class="btn">Bestel tickets!</button>
                    </form>
                    @if (Auth::user())
                    @if (Auth::user()->is_admin)
                
                        <a href={{ route ('edit', $event->id) }} class="btn">Edit Events</a>

                        <form action="{{ route ('delete', $event->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn">Delete Events</button>
                        </form>
                    @endif
                    @endif
                </div>
                   
            </div>
        </div>
    </div>
    @endforeach

@endsection
