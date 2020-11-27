@extends('creator.layouts.app')

@section('content')

    @auth
    <div class="header mt-5 mb-5">
        <h1>List Data</h1>
    <a class="mx-3 px-5 mb-3 btn btn-primary float-right" href="{{route('creator.event.create')}}" role="button">Tambah</a>
    </div>
    @endauth
    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Created By</th>
                <th scope="col">Updated At</th>
                <th scope="col">Created At</th>
                <th scope="col">Detail</th>
                <th scope="col">Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td><a @auth href="{{ route('creator.event.edit', $event) }}" @endauth>{{ $event->title }}</a>
                    </td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->status }}</td>
                    <td>{{ $event->creator->name }}</td>
                    <td>{{ $event->updated_at }}</td>
                    <td>{{ $event->created_at }}</td>
                    <td>
                        <form action="{{ route('creator.event.show', $event) }}" method="GET">
                            @csrf
                            <button type="submit" name="" class="btn btn-primary">Detail</button>
                        </form>
                    </td>
                    @auth
                    <td>
                        <form action="{{ route('creator.event.destroy', $event) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
