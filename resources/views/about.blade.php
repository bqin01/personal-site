@extends('layout')
@section('css',"/styles/about.css")
@section('navbar')
  @parent
@endsection
@section('content')
  <div id = "background">
    <div id = "about-box">
      <h1 width = "500px">Bill Z. Qin</h1>
      <div id = "data-points">
        <div class = "inform">
          <div class = "infotag"><h2>Background</h2></div>
          <div class = "vertdiv"></div>
          <p class = "infoinfo">
            Born and raised in North York, ON, Canada<br>

          </p>
        </div>
        <div class = "inform">
          <div class = "infotag"><h2>Education</h2></div>
          <div class = "vertdiv"></div>
          <p class = "infoinfo">
            Carnegie Mellon University's School of Computer Science<br>
            Phillips Academy's Class of 2019
          </p>
        </div>
        <div class = "inform">
          <div class = "infotag"><h2>Academic Interests</h2></div>
          <div class = "vertdiv"></div>
          <p class = "infoinfo">
            Algorithmic Computer Science<br>
            Full Stack App Development<br>
            Discrete Mathematics<br>
            Game Theory
          </p>
        </div>
        <div class = "inform">
          <div class = "infotag"><h2>Other Interests</h2></div>
          <div class = "vertdiv"></div>
          <p class = "infoinfo">
            Fencing (Epee)<br>
            Badminton<br>
            Film Production
          </p>
        </div>
        <div class = "inform">
          <div class = "infotag"><h2>Fun Fact</h2></div>
          <div class = "vertdiv"></div>
          <p class = "infoinfo" id = "funfact">
            My favorite ice cream flavor is mint chocolate chip.<br>
            Or plain old strawberry. I can't decide.
          </p>
        </div>
      </div>
    </div>
    <div id = "invert-button">
      <img id = "invert-img" src = "/images/sun.svg" width = "64" height = "64" onclick = "darkmode();"></img>
      <div id = "invert-vline"></div>
    </div>
  </div>
@stop
