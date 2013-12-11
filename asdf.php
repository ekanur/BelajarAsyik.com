<script>
function shuffle(o) {
	for(a,b,c = o.length;a = Math.floor(Math.random() * c), b = o[--c] , c = o[a] , o[a] = b);
	return o;
}


function drag(event) {
	var target = event.target;
	var offset = {x:target.x - event.stageX, y:target.y - event.stageY };
	
	event.addEventListener('mousemove',function(evt){
		evt.target.x = evt.stageX + offset.x;
		evt.target.y = evt.stageY + offset.y;
		stage.update();
	});
	
	event.addEventListener('mouseup',function(evt){
		var pt = boxTarget.localToLocal(evt.target.x, evt.target.y);
		if(avt.target.hitTest(pt.x,pt.y)) {
			
		}
	});
}



</script>