@extends('homeLayout')
@section('title')
Failed login
@stop
@section('body')
<div class="jumbotron" id="logoImg">
  <h1>HaBUtek </h1>
  <center><h3>Please Enter the Correct Email and Password</h3>
  <h3>{{ link_to_route('user.index', 'Return') }}</h3></center>
</div>
@stop
