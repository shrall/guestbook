@extends('layouts.app')

@section('content')
<h1>{!!$title!!}</h1>
<table class="table table-striped table-dark table-hover">
    <thead>
      <tr>
        <th scope="col">Jam</th>
        <th scope="col">Nama</th>
        <th scope="col">ID Line</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Ardian</td>
        <td>subahono123</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Michelle</td>
        <td>wenfi123</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Tinara</td>
        <td>yusuf123</td>
      </tr>
    </tbody>
  </table>
@endsection
