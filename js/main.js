var products = [
    {
        
        'photos':['img/products/prod002.jpg','img/products/prod002.jpg','img/products/prod003.jpg'],
        'name':'Grãos',
        'shortDescription': 'Grande variedade de grãos de alta qualidade.',
        'description':'Etiam ut metus et ipsum aliquet consectetur et ac augue. Nulla facilisi. Vivamus eget consectetur diam. Phasellus auctor dignissim turpis id fermentum. Ut pretium eget nisl laoreet scelerisque.',
        'codProduct':' SV#021',
        'value': 'Consulte',
        'rate': '4,5',
        'category':'grãos'

        
    },
    {
        
        'photos':['img/products/prod003.jpg'],
        'name':'Pergola',
        'shortDescription': 'vinhos e sucos integrais Pergola.',
        'description':'Etiam ut metus et ipsum aliquet consectetur et ac augue. Nulla facilisi. Vivamus eget consectetur diam. Phasellus auctor dignissim turpis id fermentum. Ut pretium eget nisl laoreet scelerisque.',
        'codProduct':' SV#022',
        'value': 'Variados',
        'rate': '4,5',
        'category':'sucos'

        
    },
    {
        
        'photos':['img/products/prod004.jpg'],
        'name':'San Paolo',
        'shortDescription': 'Rondellis e Gnocchis em variados sabores.',
        'description':'Etiam ut metus et ipsum aliquet consectetur et ac augue. Nulla facilisi. Vivamus eget consectetur diam. Phasellus auctor dignissim turpis id fermentum. Ut pretium eget nisl laoreet scelerisque.',
        'codProduct':' SV#023',
        'value': 'Variados',
        'rate': '4,5',
        'category':'sucos'

        
    },
]


jQuery(document).ready(function() {
    var url = window.location.href;
    var split = url.split('?')
    if(split.length < 2){
        $(".geral").hide();
        $("#wines-br").show();
        generateCard();
    }else{
        id = split[1].split('=');

        generateDetails(id[1]);
    }

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

function wineFilter(id){
    $(".cat-wine").removeClass('active');
    $("#cat-wine-"+id).addClass('active');
    $(".geral").hide();
    $("#wines-"+id).show()
}


function generateCard(){
       
    var html = '';
    for(var i = 0; i < products.length; i ++){
        var prd = products[i]
        html += '<div class="card-group col-12 col-sm-4 mb-5">';
        html += '    <div class="card card-style-001" id="imageCard1">';
        html += '        <div class="card-body p-0" >';
        html += '            <img src="' + prd.photos[0] + '" alt="" class="card-img">';
        html += '        </div>';
        html += '    </div>';
        html += '    <div class="card card-style-001 bg-sv-4" >';
        html += '        <div class="card-body text-white">';
        html += '            <h4 class="card-title">' + prd.name + '</h4>';
        html += '            <p class="card-text">' + prd.shortDescription + '</p>';
        html += '        </div>';
        html += '        <div class="card-footer text-right text-white" >';
        html += '            <button class="btn btn-outline-light mt-5 btn-sm w-100" onclick="detailsProducts('+ i +')">Detalhes</button>';
        html += '        </div>';
        html += '    </div>';
        html += '</div>';
    }

        $(".cardsProducts").append(html);

}


function detailsProducts(index){
    window.location.href = 'product-details.html?id='+index;
}

function generateDetails(id){
    if( id > ( products.length - 1)){
        $(".404").removeClass('d-none')
        $(".200").addClass('d-none')
    }else{
        $(".404").addClass('d-none')
        $(".200").removeClass('d-none')

        var prd = products[id];
        var thumbs = '';
        var image = '';
        var details = '';
            for(var i = 0; i < prd.photos.length; i ++){
                var active = '';
                if(i == 0){
                    active = 'active';
                }else{
                    active = '';
                }
                thumbs += '<div class="zoom-in  my-2">';
                thumbs += '    <img src="' + prd.photos[i] + '" class="img-thumbnail img-product clicable '+active+'" alt="" id="thumb-'+i+'" onclick="alterImage(\''+prd.photos[i]+'\', '+this.id+')">';
                thumbs += '</div>';
            }
        var bigImage = prd.photos[0].split('.');
            image = '<img src="' + bigImage[0] + '_max.'+bigImage[1]+'" class="img-fluid" alt="">';
        
            details += '<h2 class="text-center text-white mt-2 mb-4">' + prd.name + '</h2>';
            details += '<hr class="bg-white">';
            details += '<p class="lead text-justify text-white my-3">' + prd.description + '</p>';
            details += '<hr class="bg-white">';
            details += '<h4 class="text-left text-white">' + prd.value + '</h4>';
            details += '<h6 class="text-left text-white lead">' + prd.codProduct + '</h6>';
        
            $(".big-image").html(image);
            $(".thumb-images").html(thumbs);
            $(".details-product").html(details);
    }
    

}


function alterImage(srcImage, idObject){

    var bigImage = srcImage.split('.');

    var image = '<img src="' + bigImage[0] + '_max.'+bigImage[1]+'" class="img-fluid" alt="">';
    
    $(".big-image").html(image);
    $(".img-product").removeClass('active')
    $("#"+idObject).addClass('active')

}

