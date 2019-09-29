<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'none';
        style-src 'self' 'unsafe-inline';
        img-src 'self' data:;
        " />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="CE - Free Car Consultancy">
    <meta name="author" content="Freddie">

    <!-- Fontawseom Icon CSS -->
    <link rel="stylesheet" href="{{ asset('css/sample_1/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample_1/carousel.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/sample_1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample_1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample_1/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample_1/mycss.css') }}">
    <link href="{{ asset('css/sample_1/aos.css') }}" rel="stylesheet">

    

    <title>CE- Car Energies</title>
</head>
<style>
    
    #page-top {
  min-height: 75rem;
  padding-top: 10.8rem;
}
#nav-content a{
    color: white;
}
.link-3 {
  transition: 0.4s;
  color: #ffffff;
  font-size: 20px;
  text-decoration: none;
  padding: 0 10px;
  margin: 0 10px;
}
.link-3:hover {
  background-color: #58842c;
  color: #EEA200;
 
}
#navbar {

  display: block;
  transition: top 0.3s;
}
.jumbo_text{
    color: black;
}

</style>
  <!-- NAVBAR
    ================================================= -->
<div class="fixed-top">
         <div id="logo" class="bg-white">
                <img src="{{ asset('images/sample_1/logo/logo.png') }}" alt="bmlogo" height="100" width="300">
        </div>
    <nav class="navbar navbar-expand-md" style="background-color: #669932; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); height: 60px !important;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation" >
                <i class="fas fa-bars" style="color: white"></i>
        </button>

        <!-- Brand -->
        <!-- <a class="navbar-brand" href="#">Logo</a> -->

        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-end" id="nav-content">   
        <ul class="navbar-nav">
            <li class="nav-item link-3">
                <a class="nav-link " href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item  link-3">
                <a class="nav-link" href="{{ url('Services/') }}">Services</a>
            </li>
            <li class="nav-item  link-3">
                <a class="nav-link" href="{{ url('Benefits/') }}">Benefits</a>
            </li>
              <li class="nav-item link-3">
                <a class="nav-link " href="{{ url('About/') }}">About Us</a>
            </li>
            <li class="nav-item  link-3">
                <a class="nav-link" href="{{ url('Submit/') }}">Submit</a>
            </li>
        </ul>
    </nav>
</div>

<body id="page-top">

  
    