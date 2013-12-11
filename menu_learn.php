<?php include("mainheader.php"); ?>
    <div id="content">
    <div class="cloud1"></div>
        <div class="cloud2"></div>
        <div class="cloud3"></div>
        <div class="house">
        	<a href="kitchen.php" class="full"><div class="kitchen btnroom"><h3>KITCHEN</h3></div></a>
            <a href="livingroom.php" class="full"><div class="livingroom btnroom"><h3>LIVING ROOM</h3></div></a>
            <a href="bedroom.php" class="full"><div class="bedroom btnroom"><h3>BEDROOM</h3></div></a>
            <a href="bathroom.php" class="full"><div class="bathroom btnroom"><h3>BATHROOM</h3></div></a>
    	</div>
        <div id="pohon"></div>
        <div id="bg"></div>
        <div id="bg_kanan"></div>
        <script>
			$('.btnroom').hover(function(){
				$(this).animate({
					"opacity" : "0.7"
				});
			},function(){
				$(this).animate({
					"opacity" : "0"
				});
			});
		</script>
    </div>
    
<?php include("mainfooter.php"); ?>