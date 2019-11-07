function link(url, id,page) {
	$('.menu').removeClass('active');
	if (id != undefined) {
		$('#'+id).addClass('active');
	}
	if(page){
		window.location.href = url;
	}else{
		document.getElementById("content-frame").src = url;

	}
	return false;
}