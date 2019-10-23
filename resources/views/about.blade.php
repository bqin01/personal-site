@extends('layout')
@section('css',"/styles/about.css")
@section('navbar')
  @parent
@endsection
@section('content')
  <div id = "background">
    <div id = "invert-button">
      <img id = "invert-img" src = "/images/sun.svg" width = "64" height = "64" onclick = "darkmode();"></img>
      <div id = "invert-vline"></div>
    </div>
    <div id = "about-box">
      <h1>Bill Z. Qin</h1>
      <h2>
        I am a student born in Toronto, ON, Canada interested in algorithm design, full stack app development, mathematics,
        video directing/editing, game design, game theory, and the logistics of creativity.
      </h2>
      <h2>
        After attending both grade school and middle school in Toronto, I was accepted to attend Phillips Academy in Andover, MA and matriculated
        in September, 2015. There, I became interested in the video arts, fencing, and American law, while being able to continue pursuing
        mathematics and computer science.
      </h2>
      <h2>
        Other interests I have include badminton, table tennis, playing the piano, the clarinet, the handbells, and robotics (VEX).
      </h2>
    </div>
  </div>
@stop
