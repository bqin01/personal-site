@extends('layout')
@section('css',"/styles/experience.css")
@section('navbar')
  @parent
@endsection
@section('content')
  <div id = "background">
    <div id = "top-toolbar">
      <div class = "arrow-holder"><button id = "left-arrow" disabled ><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg></button></div>
      <div><h1>Experience</h1></div>
      <div class = "arrow-holder"><button id = "right-arrow"
      @php
        echo(count($experiences["experience"]) <= 3 ? "disabled" : "");
      @endphp
      ><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></button></div>
    </div>

    <div class = "scrollable-box" id = "experience-box">
      @foreach($experiences["experience"] as $exp)
        <div class = "experience">
          <div class = "title-time">
            <h2><a href="@php echo($exp["link"]); @endphp">@php echo($exp["name"]); @endphp</a></h2>
            <p>@php echo($exp["timeframe"]); @endphp</p>
          </div>
          <p>@php echo($exp["description"]); @endphp</p>
        </div>
      @endforeach
    </div>
  </div>
  <script>
    var maxboxes = @php echo((count($experiences["experience"]) - 1) / 4); @endphp;
    var cSelect = 0;
    $("#left-arrow").click(function(event){
      if(cSelect != 0){
        $("#right-arrow").prop('disabled', false);
        cSelect -= 1;
        if(cSelect == 0) $(this).prop('disabled', true);
        $('#experience-box').css('margin-left', cSelect * -1320 + 90);
      }
    });
    $("#right-arrow").click(function(event){
      if(cSelect != maxboxes){
        $("#left-arrow").prop('disabled', false);
        cSelect += 1;
        if(cSelect == maxboxes) $(this).prop('disabled', true);
        $('#experience-box').css('margin-left', cSelect * -1320 + 90);
      }
    });
  </script>
@stop
