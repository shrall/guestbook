@extends('creator.layouts.app')

@section('content')
<div class="container">

    <div class="header mt-5 mb-5">
        <h1>{{ $event->title }}</h1>
    </div>
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Events</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
