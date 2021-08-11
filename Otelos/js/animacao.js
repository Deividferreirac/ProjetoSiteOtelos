// JavaScript Document
$('.banner').slick({
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
});

$('.insta').slick({
  dots: true,
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '90px',
        slidesToShow: 1
      }
    }
  ]
});
	



new WOW ().init();



document.querySelector(".abrir-menu").onclick = function(){ 

	console.log("Abrir-menu");
	document.documentElement.classList.add("menu-ativo");
	
}
document.querySelector(".fechar-menu").onclick = function(){ 
	console.log("Fechar-menu");
	document.documentElement.classList.remove("menu-ativo");
	
}

