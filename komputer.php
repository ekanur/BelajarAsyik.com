<?php include("header.php"); ?>
  <div class="roof">
 	<div class="container">
 		<br/>
 		<div class="row-fluid">
 			<div class="span1">
 			<div id="back"><a href="index.php" id="btn-back"><img id="img-back" src="img/left.png" width=36 height=36></a></div></div>
 			<div class="span8"><div id="title"><h1>Peripheral Komputer</h1></div></div>

 		</div>
 		<div class="row-fluid"><div class="span12 offset1" style="padding:1px 10px"></div></div>
 	</div>
 </div>
 <div class="television">
    <div id="content">
     <div class="slider">
      <div class="content-slider">
      	<div class="item"><img src="assets/images/barang/tv.png"/> <h2>TELEVISION</h2></div>
        <div class="item"><img src="assets/images/barang/bunga.png"/> <h2>FLOWER</h2></div>
        <div class="item"><img src="assets/images/barang/lampu.png"/> <h2>LAMP</h2></div>
        <div class="item"><img src="assets/images/barang/kursi.png"/> <h2>CHAIR</h2></div>
        <div class="item"><img src="assets/images/barang/table.png"/> <h2>TABLE</h2></div>
       </div>
  	  </div>
      <div class="nav">
      <div class="next"></div><div class="prev"></div>
      </div>
    </div>
 </div> 

 <script>

 i = 0;
var countItem = 4;
 $(function(){
	 $('.prev').hide();
	$('.next').fadeIn();
	 $('.next').on('click',function(){
		
	
		 if(i < countItem) {
			
			 i++;
			 
			 $('.content-slider').animate({
				 "marginLeft": "-=800px"
			 },function(){
				 playSound(i);
			 });
		if(i == countItem-1) {
				 $(this).hide();
			 $('.prev').fadeIn();
		} else {
				
				 $(this).fadeIn();
			 $('.prev').fadeIn();
			
			}
		 }
		 
		 
		
	});

	$('.prev').on('click',function(){
		
		 
	
		 if(i > 0) {
			
			 i--;
			 
			 $('.content-slider').animate({
				 "marginLeft": "+=800px"
			 },function(){
				 playSound(i);
			 });
			 
			if(i == 0) {
				 $(this).hide();
			 $('.next').fadeIn();
			} else {
				 $(this).fadeIn();
			 $('.next').fadeIn();
			}
		 }
		 
		 
		
	});
 });
 function playSound(i){
	i = i+1;
	 switch(i){
	 	case 1 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/television.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 2 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/flower.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 3 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/lamp.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 4 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/chair.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 5 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/table.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
	 }
 }
 </script>
<?php include("footer.php"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>