$(function() {
	
	/*$('a').on('click',function(event){
		event.preventDefault();
		if($(this).hasClass('full')) {
			
			url = $(this).attr('href');
			loadUrl(url,'full');
			
		} else if($(this).hasClass('withcontainer')) {
			url = $(this).attr('href');
			loadUrl(url,'container');
		
		} else {
			url = $(this).attr('href');
			loadUrl(url,'single');
		}
		
	});*/
});

function loadUrl(url,type){
	if(type == "full") {
		
		$.ajax({
			url:url,
			cache:false,
		}).done(function(data){
			
			$container = $(data).filter('#container');
			$('#container').hide().replaceWith($container).fadeIn();
			var headIni = data.toLowerCase().indexOf('<head');
			var headEnd = data.toLowerCase().indexOf('</head>');
			headIni = data.indexOf('>',headIni + 1) + 1;
			head = data.substring(headIni,headEnd);
			$('head').html(head);
			
			
		});
	} else if(type == "container"){
		$.ajax({
			url:url,
			cache:false,
		}).done(function(data){
			//$('.loading').fadeIn();
			$('#container').hide();
			$container = $(data).filter('#container');
			$('#container').replaceWith($container);
			$('#container').fadeIn(500);
		});
		
		
	} else if(type == "single") {
		
		$('#content').hide();
		$.ajax({
			url:url,
			cache:false,
		}).done(function(data){
			
			//$('.loading').fadeIn();
			$container = $(data).find('#content');
			$('#content').replaceWith($container);
			
		});
		
	}
	
	
	if(window.location != url) {
		window.history.pushState({url:url},'',url);
	}
	
}


//$(window).on('popstate',function(event){
	//loadUrl(event.history.pathname,'full');
	//alert('sdfsdf');
//});