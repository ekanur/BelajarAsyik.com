<?php include("header.php"); ?>
 <div class="roof"></div>
 <div class="television">
    <div id="content">
     <div class="slider">
      <div class="content-slider">
      	<div class="item"><img src="assets/images/barang/pasta.png"/> <h2>TOOTH PASTA</h2></div>
        <div class="item"><img src="assets/images/barang/sabun.png"/> <h2>SOAP</h2></div>
        <div class="item"><img src="assets/images/barang/tisu.png"/> <h2>TISSUE</h2></div>
        <div class="item"><img src="assets/images/barang/sikat.png"/> <h2>TOOTH BRUSH</h2></div>
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
			audioElement.setAttribute('src', './assets/sound/toothpasta.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 2 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/soap.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 3 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/tissue.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 4 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/brushtooth.mp3');
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