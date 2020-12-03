@extends('creator.layouts.app')

@section('content')
<div class="container">
    <div class="header mt-5 mb-5">
        <h1>{{ $event->title }}</h1>
        <ul>
            <li>Creator : {{ $event->creator->name }}</li>
            <li>Date : {{ $event->event_date }}</li>
        </ul>
    </div>
    @include('creator.event.table.guest_list')
</div>
@endsection
