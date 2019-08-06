@extends('layout')
@section('css',"")
@section('navbar')
  @parent
@endsection
@section('content')
  <div id = "background">
    <div class = "centered-box">
      <h1>404</h1>
      <h2>The page you were looking for doesn't exist.</h2>
      <h2>Use the toolbar to find a page that does.</h2>
    </div>
  </div>
@stop
