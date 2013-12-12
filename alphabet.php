<?php include("header.php"); ?>
<div class="roof">
 	<div class="container">
 		<br/>
 		<div class="row-fluid">
 			<div class="span1">
 			<div id="back"><a href="kuis.php" id="btn-back"><img id="img-back" src="img/left.png" width=36 height=36></a></div></div>
 			<div class="span8"><div id="title"><h1>HOME / KUIS / KUIS 2</h1></div></div>

 		</div>
 		<div class="row-fluid"><div class="span11 offset1" style="padding:1px 10px; text-align:justify; color:#222"></div></div>
 	</div>
 </div>
<div class="television">
    <div id="content">
<canvas id="stage" width="800" height="500">
</canvas>

<script>
var stage;
var alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var quest = ['FRAME','SHOES','TABLE','CLOCK', 'SPOON'];
var imageQuest = ['pigora','sepatu','table','jam','sendok'];
var textChoice = [];
var btnChoice;
var contChoice;
var iQuest = 0;
var queue;
var contT = [];

function shuffle(o) {
	for(var j,x,i = o.length;i;j = Math.floor(Math.random() * i) , x = o[--i] , i = o[j] , o[j] = x);
	
	return o;
}

$(function(){
	init();
});
function init() {
	queue = new createjs.LoadQueue();
	queue.installPlugin(createjs.Sound);
	queue.addEventListener('complete',onLoad);
	queue.loadManifest([
		{id:"balon",src:"assets/images/balon.png"},
		{id:"sepatu",src:"assets/images/sepatu.png"},
		{id:"table",src:"assets/images/table.png"},
		{id:"pigora",src:"assets/images/pigora.png"},
		{id:"jam",src:"assets/images/jam.png"},
		{id:"sendok",src:"assets/images/sendok.png"},
		{id:"scoreBoard",src:"assets/images/score_board_green.png"}
	]);
}

function onLoad(){
	stage = new createjs.Stage('stage');
	//console.log(alphabet.charAt(0));
	for(i = 0;i < 5;i++) {
		textChoice.push(alphabet.charAt(Math.floor(Math.random() * (alphabet.length-1) )));
	}
	for(i = 0;i < 5 ;i++) {
		textChoice.push(quest[iQuest].charAt(i));
	}
	console.log(textChoice);
	shuffle(textChoice);
	console.log(textChoice);
	// contT[1] = new createjs.Text("MOHON MAAF CONTENT BELUM SEMPAT DIBUAT",'30px bazar','#FFFFFF');
	stage.addChild(contT[1]);
	for(i = 0;i<5;i++) {
		
		contT[i].textAlign = "center";
		contT[i].textBaseline = "middle";
		contT[i].x = 300 +(40 * i);
		contT[i].y = 280;
		stage.addChild(contT[i]);
	}
	
	for(i = 0;i<10;i++) {
	
	}
	
	
	console.log(textChoice);
	stage.update();
}

function showScore(){
	scoreBoard.visible = true;
	scoreResult.visible = true;
	scoreResult.text = score;
	createjs.Tween.get(scoreBoard).to({ alpha: 1, scaleX :1, scaleY:1 },500,createjs.Ease.bounceOut).call(function(){
		createjs.Tween.get(scoreResult).to({ alpha: 1, scaleX :1, scaleY:1 },500,createjs.Ease.bounceOut)
	});
}



</script>
</div>
</div>
<?php include("footer.php"); ?>