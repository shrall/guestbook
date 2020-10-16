@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header mt-5 mb-1">
        <h1>Edit Data</h1>
    </div>
    <form action="{{route('event.update', $event)}}" method ="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label>Title : </label>
            <input type="text" class="form-control" name="title" value="{{ $event->title }}">
        </div>
        <div class="form-group">
            <label>Description : </label>
            <input type="text" class="form-control" name="description" value="{{ $event->description }}">
        </div>
        <div class="form-group">
            <label>Event Date : </label>
            <input type="date" class="form-control" name="event_date" value="{{ $event->event_date }}">
        </div>
        <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection