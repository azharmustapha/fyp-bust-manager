@extends('layouts.app')

@section('content')

<body>

<div class="container">
  <h2>Daily Attendance</h2>
  
    <br>         

  <div class = "col-md-6">
    <form action="/searchh" method="get">
    <div class="input-group">
      <input type="search" name="search" class="form-control">
      <span class="input-group-prepend">
        <button type="submit" class="btn btn-primary">Search</button>
      </span>
    </div>
    </form>
  </div>

    <br>

    <div class="row">
      <div class='col-md-3 mb-5'>
        <label for="sel1">Date :</label>
        <select class="form-control" id="sel1">
          <option>1/5/2019</option>
          <option>2/5/2019</option>
          <option>3/5/2019</option>
          <option>4</option>
        </select>
      </div>
      
      <br>

      <div class='col-md-3 mb-5'>
        <label for="sel2">Bus Plate:</label>
        <select class="form-control" id="sel2">
          <option>DV2551</option>
          <option>DCC4554</option>
          <option>DEE554</option>
          <option>DCR2346</option>
        </select>
      </div>
    </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>Student ID</th>
        <th>Scan Time</th>
      </tr>
    </thead>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->jadual_id }}</td>
        <td>{{ $user->scannedCode }}</td>
        <td>{{ $user->scan_time }}</td>
      </tr>
    @endforeach
  </table>
</div>

</body>

@endsection