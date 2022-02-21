$(function(){

	$('.mosaico .container .mosaico-wraper').slick({
		centerMode: false,
		slidesToShow:6,
		arrows:false,
		responsive:[
		{
			breakpoint:768,
			settings:{
				arrows:false,
				centerMode:true,
				slidesToShow:3
			}
		},
		{
			breakpoint:580,
			settings:{
				centerMode:true,
				arrows:false,
				slidesToShow:2
			}
		},
		{
			breakpoint:380,
			settings:{
				centerMode:true,
				arrows:false,
				slidesToShow:1
			}
		}

		]
	});

	$('.depoimento .container').slick({
		centerMode:false,
		slidesToShow:1,
		arrows:false,
		dots:true,
		infinite:false
	});


})