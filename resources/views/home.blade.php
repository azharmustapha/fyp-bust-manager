@extends('layouts.app')

@section('content')

<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


 <!-- Header -->
 <header class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-dark mt-5 mb-2">School Bus Monitoring System</h1>
          <p class="lead mb-5 text-dark-50">We serves you the best school bus service in town</p>
        </div>
      </div>
    </div>
  </header>


  <!-- Page Content -->
  <div class="container">
    <div class="row">
        <div class="col-md-8 mb-5">
          <h2>Welcome to BUS-T System!</h2>
          <hr>
          <h2>What We Do</h2>
          <p>BUS-T System provides you the best school bus services with more secure attendance and on time arrive to the destinations</p>
          <a class="btn btn-outline-dark" href="/student">Generate QR Code Now &raquo;</a>
        </div>
        <div class="col-md-4 mb-5">
          <h2>Contact Us</h2>
          <hr>
          <address>
            <strong>BUS-T Corporation</strong>
            <br>3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </address>
          <address>
            <abbr title="Phone">Phone:</abbr>
            013 - 5951629
            <br>
            <abbr title="Email">Email:</abbr>
            <a href="mailto:#">bust@gmail.com</a>
          </address>
        </div>
      </div>

    <div class="w3-row-padding w3-center w3-margin-top">
      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:400px">
        <h3>Student</h3><br>
        <i class="fa fa-bus w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
        <p>Arrive on Time</p>
        <p>Safely to Destination</p>
        <p>Arrive on Time</p>
        </div>
      </div>

      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:400px">
        <h3>QR Code</h3><br>
        <i class="fa fa-qrcode w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
        <p>Easy to Use</p>
        <p>No need to use coins</p>
        <p>One Student, One QR Code</p>
        </div>
      </div>

      <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:400px">
        <h3>Parent & Driver</h3><br>
        <i class="fa fa-user w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
        <p>Paper like design</p>
        <p>Bold colors and shadows</p>
        <p>Equal across platforms</p>
        </div>
      </div>
    </div>

    &nbsp;

    <!-- Footer -->
    <footer class="jumbotron py-5 mb-10">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-lg-12">
            <div class="copyright">
                &copy; 2019 - 2020 <a href="javascript:void(0);">BUS-T Corporation - Material Design</a>
            </div>
            <div class="version">
                <b>Version: </b> 1.0.2
            </div>
          </div>
        </div>
      </div>
    </footer>
  <!-- #Footer -->

@endsection

