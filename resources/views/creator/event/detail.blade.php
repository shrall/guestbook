@extends('creator.layouts.app')

@section('content')
<div class="container">
    <div class="header mt-5 mb-5">
        <h1>{{ $event->title }}</h1>
        @include('inc.messages')
        <ul>
            <li>Creator : {{ $event->creator->name }}</li>
            <li>Date : {{ $event->event_date }}</li>
        </ul>

        <button type="button" class="btn btn-primary btn-circle float-right mb-3" title="Add guest to this event"
            data-toggle="modal" data-target="#addGuest"><i class="fas fa-plus-circle"></i></button>
        @include('creator.event.modal.add_guest')
    </div>
    @include('creator.event.table.guest_list')
</div>
@endsection
