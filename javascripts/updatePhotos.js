$(document).ready(function(){
	setInterval(function() {
	    getNewPhotoForFancy();
	}, 30000); //5 seconds
});

function getNewPhotoForFancy() {
	var last = $('#last').val();
	$.ajax({
	  	type: "POST",
	  	url: "/ajax/getNewPhotos.php",
	  	data: { key: "getPhotos", type: "fancy", last: last},
	  	dataType: "json",
		success: function(result){
          	if (result.status == 'true') {
          		$('#last').val(result.last);

          		for (i = result.count; 0 < i; i--) {
          			var html = '<a class="group" rel="group1" title="' + result.photos[i].caption + '"  href="' + result.photos[i].image + '">';
          			html += '<img src=' + decodeURIComponent(result.photos[i].thumbnail) + '></a>';

          			$('.image-containers').prepend(html);	
          		}

          		$('a.group').unbind('click.fb');

          		$("a.group").fancybox({
					'nextEffect'	:	'fade',
					'prevEffect'	:	'fade',
					'overlayOpacity' :  0.8,
					'overlayColor' : '#000000',
					'arrows' : false,
				});
          	}
      	},
      	error:function(){
          	console.log('error');
      	}   
    }); 
}

