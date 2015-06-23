jQuery(document).ready(function ($){
	$('.marquee').marquee({
		speed: 40000,
		gap: 50,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated:true,
		pauseOnHover: true
	});
});