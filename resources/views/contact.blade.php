@extends('layout')
@section('css',"/styles/contact.css")
@section('navbar')
  @parent
@endsection
@section('content')
  <div id = "background">
    <div id = "invert-button">
      <img id = "invert-img" src = "/images/sun.svg" width = "64" height = "64" onclick = "darkmode();"></img>
      <div id = "invert-vline"></div>
    </div>
    <div id = "centered-box">
      <h1>Contact me!</h1>
      <h2>There are plenty of ways to contact me. Here are the best ways to do so!</h2>
      <div id = "contact-box">
        <div class = "box" id = "email-box">
          <h1>Email</h1>
          <h2>
            Personal Email:<br>
            <a href="mailto:bzqin88@gmail.com">bzqin88@gmail.com</a>
          </h2>
          <h2>
            Carnegie Mellon Email:<br>
            <a href="mailto:bzq@andrew.cmu.edu">bzq@andrew.cmu.edu</a>
          </h2>
        </div>
        <div class = "box" id = "linkedin-box">
          <h1>LinkedIn</h1>
          <h2>
            <a href="https://www.linkedin.com/in/billqin01/">Connect and message!</a>
          </h2>
        </div>
      </div>
    </div>
  </div>
@stop
