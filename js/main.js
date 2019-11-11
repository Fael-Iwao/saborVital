jQuery(document).ready(function() {
    $(".geral").hide();
    $("#vinhos-br").show();
});

$(window).on("scroll load resize", function () {
	$("#banner").css('height', ($(window).height() - ($('.header-master').height() + 32)) + "px");
	var startY = $('.header-master').height();

	if ($(window).scrollTop() < startY) {
		$('.inHome.header-master').addClass("stop").removeClass('bg-sv-3');
		$('.inHome.header-master .header-title').addClass("visible-0");
		// $('.nav-link').addClass("text-white").removeClass('text-dark');
	} else {
		$('.inHome.header-master').removeClass("stop").addClass('bg-sv-3');
		$('.inHome.header-master .header-title').removeClass("visible-0");
		// $('.nav-link').removeClass("text-white").addClass('text-dark');

	}
});

var $doc = $('html, body');
$('.scroll-down').click(function() {
        $doc.animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top -100
        }, 1000);
        return false;
});

function filtroVinho(id){
    $(".cat-vinho").removeClass('active');
    $("#cat-vinho-"+id).addClass('active');
    $(".geral").hide();
    $("#vinhos-"+id).show()
}
function modalProduto(){
    $("#modalProduto").modal('show')
}