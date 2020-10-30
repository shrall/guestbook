@extends('layouts.app')

@section('content')
<div class="container">
    <div class="header mt-5 mb-1">
        <h1>Insert Data</h1>
    </div>
    <form action="{{route('event.store')}}" method ="post">
        @csrf
        <div class="form-group">
            <label>Title : </label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Description : </label>
            <input type="text" class="form-control" name="description" >
        </div>
        <div class="form-group">
            <label>Created by : </label>
            <select name="created_by" class="custom-select"">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}({{$user->email}})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Event Date : </label>
            <input type="date" class="form-control" name="event_date" >
        </div>
        <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection