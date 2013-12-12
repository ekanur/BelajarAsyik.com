<?php include("header.php"); ?>
 <div class="roof">
 	<div class="container">
 		<br/>
 		<div class="row-fluid">
 			<div class="span1">
 			<div id="back"><a href="index.php" id="btn-back"><img id="img-back" src="img/left.png" width=36 height=36></a></div></div>
 			<div class="span8"><div id="title"><h1>Topologi Jaringan</h1></div></div>

 		</div>
 		<div class="row-fluid"><div class="span11 offset1" style="padding:1px 10px; text-align:justify; color:#222">Topologi jaringan adalah cara menghubungkan perangkat telekomunikasi yang satu dengan yang lainnya sehingga membentuk jaringan. Dalam suatu jaringan telekomunikasi, jenis topologi yang dipilih akan mempengaruhi kecepatan komunikasi. Untuk itu maka perlu dicermati kelebihan/keuntungan dan kekurangan/kerugian dari masing ‐masing topologi berdasarkan karakteristiknya masing topologi berdasarkan karakteristiknya. Berikut ini adalah jenis atau Macam - macam Topologi dari jaringan tersebut</div></div>
 	</div>
 </div>
 <div class="television">
    <div id="content">
     <div class="slider">
      <div class="content-slider">
      	<div class="item"> <h2>REFRIGRATOR</h2>
      		<div class="container">
      			<div class="span3"><img src="assets/images/barang/kulkas.png"/></div>
      			<div class="span6" style="padding-top:15px">
      			<p>Ac et, sit montes. Vel lundium amet et nec augue magna tortor velit, dignissim habitasse in? Elementum. Elementum nec pellentesque enim odio. Magna duis. Pulvinar scelerisque, scelerisque. Natoque! Nec et? Ut, tempor massa ridiculus etiam mauris, cursus nunc, lacus pulvinar, ac a. Ut ac. Non etiam platea arcu, tortor et! Enim et porta ac tempor in nisi, integer turpis ut. </p>
      			</div>	
      		</div>
      	</div>
        <div class="item"><h2>BOWL</h2><img src="assets/images/barang/mangkok.png"/> </div>
        <div class="item"><h2>GLASS</h2><img src="assets/images/barang/gelas.png"/></div>
        <div class="item"> <h2>PAN</h2><img src="assets/images/barang/panci.png"/></div>
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