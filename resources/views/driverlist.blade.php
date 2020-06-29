@extends('layouts.app')

@section('content')

<body>

<div class="container">
  <h2>Driver List</h2>

  <div class = "col-md-5">
    <form action="/search" method="get">
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
        <th>No.</th>
        <th>Full Name</th>
        <th>Identification Card</th>
        <th>Phone Number</th>
        <th>Username</th>
        <th>Password</th>
        <th>Options</th>

      </tr>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->pemandu_id }}</td>
        <td>{{ $user->pemandu_fullname }}</td>
        <td>{{ $user->pemandu_ic }}</td>
        <td>{{ $user->pemandu_phone }}</td>
        <td>{{ $user->pemandu_username }}</td>
        <td>{{ $user->pemandu_password }}</td>
        <td><center><a type="button" href='edit/{{$user->pemandu_id}}' class="btn btn-primary btn-sm">UPDATE</a> &nbsp; <a type="button" href='delete/{{$user->pemandu_id}}' class="btn btn-danger btn-sm">DELETE</a></center></td>

      </tr>
    @endforeach
  </table>

  <a class="btn btn-primary btn-lg" href="/driver">ADD DRIVER</a>

</div>

</body>

@endsection