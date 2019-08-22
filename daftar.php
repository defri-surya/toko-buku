 <!DOCTYPE html>
<html>
<head>
	<title>login aplikasi</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <script type="text/javascript">
  $('#login-button').click(function(){
  $('#login-button').fadeOut("slow",function(){
    $("#container").fadeIn();
    TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
    TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
  });
});

$(".close-btn").click(function(){
  TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
  TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
  $("#container, #forgotten-container").fadeOut(800, function(){
    $("#login-button").fadeIn(800);
  });
});

/* Forgotten Password */
$('#forgotten').click(function(){
  $("#container").fadeOut(function(){
    $("#forgotten-container").fadeIn();
  });
});
   
var promises = [];
function makePromise(i, video) {
  promises[i] = new $.Deferred();
 
  video.oncanplaythrough = function() {

    promises[i].resolve();
  }
}
$('video').each(function(index){
  this.pause();
  makePromise(index, this);
})

$.when.apply(null, promises).done(function () {
  $('video').each(function(){
    this.play();
  });
});

  </script>
  <?php
  @$pesan = $_GET['pesan'];
  if($pesan=="sama")
  {
    echo"<script type='text/javascript'>
      alert('Username atau password sudah digunakan user lain');
    </script>";
  }
  ?>
</head>
<body>
<div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="video/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="video/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1><b>Silahkan Daftar</b></h1>
      <form action="cekdaftar.php" method="post">
      <input type="text" placeholder="Nama" name="nama"/>
      <input type="text" placeholder="Username" name="username" />
      <input type="password" placeholder="password" name="password"/>
      <button type="submit">Sign Up</button>
 </form>
    </div>
  </div>
</div>
</body>
</html>