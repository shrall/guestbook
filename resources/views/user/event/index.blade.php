@extends('user.layouts.app')

@section('content')
@include('user.event.modal.add')
@auth
    <div class="header mt-5 mb-5">
        <h1>List Data</h1>
        {{-- <a class="mx-3 px-5 mb-3 btn btn-primary float-right" href="" role="button">Tambah</a> --}}
        <button type="button" class="mx-3 px-5 mb-3 btn btn-primary float-right" data-toggle="modal"
            data-target="#exampleModal">
            Join Event
        </button>
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
            {{-- @auth
                <th scope="col">Control</th>
@endauth--}}
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
