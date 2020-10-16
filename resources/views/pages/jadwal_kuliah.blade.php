@extends('layouts.app')

@section('content')
<h1>{!!$title!!}</h1>
<table class="table table-striped table-dark table-hover">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Hari</th>
        <th scope="col">Jam</th>
        <th scope="col">Mata Kuliah</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Senin</td>
        <td>09.10-12.30</td>
        <td>Mobile Application Development</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Kamis</td>
        <td>07.30-09.10</td>
        <td>Religion</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Jumat</td>
        <td>07.30-10.50</td>
        <td>Web Development</td>
      </tr>
    </tbody>
  </table>
@endsection
