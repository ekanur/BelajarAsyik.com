<?php include("header.php"); ?>
 <div class="roof"></div>
 <div class="television">
    <div id="content">
     <div class="slider">
      <div class="content-slider">
      	<div class="item"><img src="assets/images/barang/kulkas.png"/> <h2>REFRIGRATOR</h2></div>
        <div class="item"><img src="assets/images/barang/mangkok.png"/> <h2>BOWL</h2></div>
        <div class="item"><img src="assets/images/barang/gelas.png"/> <h2>GLASS</h2></div>
        <div class="item"><img src="assets/images/barang/panci.png"/> <h2>PAN</h2></div>
       </div>
  	  </div>
      <div class="nav">
   
      <div class="next"></div><div class="prev"></div>
      </div>
    </div>
 </div> 

  <style>
 
  	
 </style>
 <script>

 i = 0;
var countItem = 4;

 $(function(){
	
	 $('.prev').fadeOut();
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
				 $(this).fadeOut();
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
			audioElement.setAttribute('src', './assets/sound/refrigrator.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 2 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/bowl.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 3 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/glass.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
		case 4 :
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', './assets/sound/pan.mp3');
			audioElement.setAttribute('autoplay','autoplay');
			audioElement.play();
			break;
	 }
 }
 </script>
<?php include("footer.php"); ?>