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
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Updated At</th>
                <th scope="col">Created At</th>
                <th scope="col">Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td><a href="{{ route('event.edit', $event) }}">{{ $event->title }}</a>
                    </td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->status }}</td>
                    <td>{{ $event->updated_at }}</td>
                    <td>{{ $event->created_at }}</td>
                    <td>
                        <form action="{{ route('event.destroy', $event) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
@endsection
