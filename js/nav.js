$(document).ready(function() {
		$(window).scroll(function() {
				$('.custom-navigation').toggleClass("fixed-top", ($(window).scrollTop() > 10));
		});
	});


$("#sidebar-navigate-toggle").mouseover(function() {
	$(".index-side-menu").toggleClass("active");
});