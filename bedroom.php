<?php include("header.php"); ?>
 <div class="roof">
 	<div class="title"><div id="back"></div><div id="title">Title</div></div>
 </div>
 <div class="television">
    <div id="content">
     <div class="slider">
      <div class="content-slider">
      	<div class="item"><img src="assets/images/barang/bantal.png"/> <h2>PILLOW</h2></div>
        <div class="item"><img src="assets/images/barang/kursi.png"/> <h2>CHAIR</h2></div>
        <div class="item"><img src="assets/images/barang/jam.png"/> <h2>CLOCK</h2></div> 
        <div class="item"><img src="assets/images/barang/lampu.png"/> <h2>LAMP</h2></div>
        <div class="item"><img src="assets/images/barang/jam.png"/> <h2>JAM</h2></div>           
      </div>
  	 </div>
      <div class="nav">
      <div class="next"></div><div class="prev"></div>
      </div>
    </div>
 </div> 

 <script>

 i = 0;
var countItem = 5;
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
			audioElement.setAttribute('src', './assets/sound/pillow.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 2 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/chair.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 3 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/clock.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 4 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/lamp.mp3');
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