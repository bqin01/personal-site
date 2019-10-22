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
      <div id = "intro" onclick = "namechange();">
        <h1 id = "name">Bill Z. Qin</h1>
        <div id = "name-uline"></div>
      </div>
      <div id = "link-boxes">
        <div id = "resume-box" class = "link-box">
          {{-- <h4>View My Resume</h4> --}}
          <div class = "link-hline"></div>
          <a href = "@php echo($links[0]); @endphp"><img src = "/images/resume.png" class = "link-button"></img></a>
        </div>
        <div id = "github-box" class = "link-box">
          {{-- <h4>Fork and Star Me</h4> --}}
          <div class = "link-hline"></div>
          <a href = "@php echo($links[1]); @endphp"><img src = "/images/github.png" class = "link-button"></img></a>
        </div>
        <div id = "linkedin-box" class = "link-box">
          {{-- <h4>Connect With Me</h4> --}}
          <div class = "link-hline"></div>
          <a href = "@php echo($links[2]); @endphp"><img src = "/images/linkedin.png" class = "link-button"></img></a>
        </div>
      </div>
    </div>
  </div>
  <script>
    function namechange()
    {
      if($('#name').text() == "Bill Z. Qin"){
        $('#name').text("秦兆洋");
      }else{
        $('#name').text("Bill Z. Qin");
      }
    }
  </script>
@stop
