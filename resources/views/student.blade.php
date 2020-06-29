@extends('layouts.app')

@section('content')

<body>

<div class="container">
  <h2>Student List</h2>

  <div class = "col-md-5">
    <form action="/searchs" method="get">
    <div class="input-group">
      <input type="search" name="search" class="form-control">
      <span class="input-group-prepend">
        <button type="submit" class="btn btn-primary">Search</button>
      </span>
    </div>
    </form>
  </div>

  &nbsp;

  <table class="table table-bordered">
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>School</th>
        <th>Parent Name</th>
        <th>Parent Phone</th>
        <th>QR Code</th>
        <th>Delete</th>
      </tr>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->pelajar_id }}</td>
        <td>{{ $user->pelajar_nama }}</td>
        <td>{{ $user->sekolah_nama }}</td>
        <td>{{ $user->full_name }}</td>
        <td>{{ $user->penjaga_phone }}</td>
        <td><center><a type="button" href='qrcode/{{$user->pelajar_id}}' download='{{ $user->pelajar_id }}.png' class="btn btn-primary btn-sm">GENERATE</a></center></td>
        <td><center><a type="button" href='deletee/{{$user->pelajar_id}}' class="btn btn-danger btn-sm">DELETE</a></center></td>
      </tr>
    @endforeach
  </table>
</div>

</body>

@endsection