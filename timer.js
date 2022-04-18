window.onload = function(){
  var time = 300;
  var counter;
  var min = document.getElementById("min");
  var sec = document.getElementById("sec");
  var start = document.getElementById("start");
  var stop = document.getElementById("stop");
  var reset = document.getElementById("reset");

  start.onclick = function() {
    toggle();
    counter = setInterval( count, 1000 );
  }

  stop.onclick = function() {
    toggle();
    clearInterval( counter );
  }

  reset.onclick = function() {
    time = 300;
    sec.innerHTML = time % 60;
    min.innerHTML = Math.floor( time / 60 );
  }

  function toggle() {
    if( start.disabled ) {
      start.disabled = false;
      stop.disabled = true;
    } else {
      start.disabled = true
      stop.disabled = false;
    }
  }

  function count() {
    if( time === 0 ) {
      sec.innerHTML = 0;
      min.innerHTML = 0;
      toggle();
      alert("5分経過しました。貴重なお時間をこのサイトに使って下さりありがとうございます。");
      clearInterval( counter );
    } else {
      time -= 1;
      sec.innerHTML = time % 60;
      min.innerHTML = Math.floor( time / 60 );
    }
  }

}
