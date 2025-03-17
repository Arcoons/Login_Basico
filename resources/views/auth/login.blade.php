
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/style.css">
@extends('layouts.app')
@section('content')
<div class="wrapper fadeInDown">
  <div id="formContent">

    


    <form action="{{ route('login') }}" method="POST">
		@csrf
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Correo">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>


    

  </div>
</div>
