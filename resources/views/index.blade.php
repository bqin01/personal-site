@extends('layout')
@section('css',"/styles/index.css")
@section('navbar')
  @parent
@endsection
@section('content')
  @php
    $linkfile = fopen('../data/links.txt', 'r');
    $linktxt = fread($linkfile,filesize('../data/links.txt'));
    fclose($linkfile);
    $n = 0;
    $links = new SplFixedArray(4);
    $iLine = strtok($linktxt,"\r\n");
    while($iLine !== false){
      $links[$n] = $iLine;
      $n += 1;
      $iLine = strtok("\r\n");
    }
  @endphp
  <div id = "background">
    <div id = "name-box">
      <h1>Bill Z. Qin</h1>
      <h2><a href = "https://www.cmu.edu">Carnegie Mellon University</a>'s <a href = "https://www.cs.cmu.edu">SCS</a> '23</h2>
      <h2><a href = "https://www.andover.edu">Phillips Academy</a> '19</h2>
      <div id = "link-boxes">
        <div id = "resume-box" class = "link-box">
          <h4>View My Resume</h4>
          <a href = "@php echo($links[0]); @endphp"><img src = "/images/gdrive.png" class = "img-button"></img></a>
        </div>
        <div id = "github-box" class = "link-box">
          <h4>Fork and Star Me</h4>
          <a href = "@php echo($links[1]); @endphp"><img src = "/images/github.png" class = "img-button"></img></a>
        </div>
        <div id = "linkedin-box" class = "link-box">
          <h4>Connect With Me</h4>
          <a href = "@php echo($links[2]); @endphp"><img src = "/images/linkedin.png" class = "img-button"></img></a>
        </div>
      </div>
    </div>
  </div>
@stop
