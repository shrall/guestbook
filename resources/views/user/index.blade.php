@extends('layouts.app')

@section('content')
<div class="container">

    <div class="header mt-5 mb-5">
        <h1>List Data</h1>
        <a class="mx-3 px-5 mb-3 btn btn-primary float-right" href="/event/create" role="button">Tambah</a>
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
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach($user->events as $event)
                            <li>{{ $event->title}}</li>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
