@extends('layouts.base')

@section('content')
    @foreach($ticket as $tickets)
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card_title">{{$tickets->event_id}}</h5>         
            </div>
        </div>
    </div>
    @endforeach

@endsection