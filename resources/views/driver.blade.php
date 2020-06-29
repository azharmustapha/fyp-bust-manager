@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

    <body>
        <div class="container">
        <h2>Add Driver</h2>

    <form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        
        <div class="form-group">
            <td>Full Name</td>
            <td><input  class="form-control" type='text' name='pemandu_fullname' /></td>
        </div>

        <div class="form-group">
            <td>Identification Card</td>
            <td><input  class="form-control" type="text" name='pemandu_ic'/></td>
        </div>

        <div class="form-group">
            <td>Phone Number</td>
            <td><input  class="form-control" type="text" name='pemandu_phone'/></td>
        </div>

        <div class="form-group">
            <td>Username</td>
            <td><input  class="form-control" type="text" name='pemandu_username'/></td>
        </div>

        <div class="form-group">
            <td>Password</td>
            <td><input  class="form-control" type="password" name='pemandu_password'/></td>
        </div>

        
        <div class="form-group">
            <td colspan = '3'>
                <button type="submit" class="btn btn-primary btn-lg">Register</button>
            </td>
        </div>

        
    </form>
    </body>
</html>

@endsection