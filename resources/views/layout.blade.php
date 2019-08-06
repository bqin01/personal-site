<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/styles/all.css"/>
    <link rel="stylesheet" type = "text/css" href = "@yield('css')"/>
    <title>
      @php
        echo($curpage=="Homepage"?"Bill Z. Qin":$curpage);
      @endphp
    </title>
  </head>
  <body>
    @section('navbar')
      <div id = "left-toolbar">
        @php
          $numHeader = count($subpages["subpages"]);
        @endphp
        @foreach($subpages['subpages'] as $subpage)
          <div class = "left-toolbar-elem" height = "<?php echo(100.0/$numHeader);?>%"
            <?php
              echo(($curpage==$subpage["name"])?"style = 'background-color: #FFFFFF88; --is-open:X;'":"style = --is-open:F;");
            ?>>
            <div class = "toolbar-elem-text">
              <h3><a href = "<?php echo($subpage["link"])?>"><?php echo($subpage["name"]);?></a></h3>
              <p><?php echo($subpage["desc"]);?></p>
            </div>
            <img src = "<?php echo($subpage["img"]);?>" class = "toolbar-elem-img" alt = "<?php echo($subpage["name"]);?>" width = "50" height = "50"
              <?php
                echo(($curpage==$subpage["name"])?"style = 'filter: invert(100%); --is-open:X;'":"");
              ?>></img>
          </div>
        @endforeach
      </div>
    @show

    @yield('content')

    <script>
      function backgroundfix(){
        $("body").css("background-image","none");
        $("body").css("background-image","linear-gradient(to top right, #5588CC, #8855CC)");
      }
      $(".left-toolbar-elem").hover(function(event){
        if($(this).css("--is-open") != "T" && $(this).css("--is-open") != "X"){
          $(this).css("margin-left","40px");
        }
      },
      function(event){
        if($(this).css("--is-open") != "T" && $(this).css("--is-open") != "X"){
          $(this).css("margin-left","0");
          $(this).css("--is-open","F");
        }
      });
      $(document).click(function(event){
        $target = $(event.target);
        var left_toolbar_elems = $(".left-toolbar-elem");
        for(var i = 0; i < left_toolbar_elems.length; i++){
          if($target.closest(left_toolbar_elems[i]).length && $(left_toolbar_elems[i]).css("--is-open") != "X"){
            $(left_toolbar_elems[i]).css("margin-left","40%");
            $(left_toolbar_elems[i]).css("--is-open","T");
          }else if($(left_toolbar_elems[i]).css("--is-open") != "X"){
            $(left_toolbar_elems[i]).css("margin-left","0");
            $(left_toolbar_elems[i]).css("--is-open","F");
          }
        }
      });
    </script>
  </body>
</html>
