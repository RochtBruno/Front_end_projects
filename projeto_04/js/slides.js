$(function(){
	$('.mosaico .container .mosaico-wrapper').slick({
		centerMode: true,
		slidesToShow: 6,
		arrows: false,
		infinite:true,

		responsive:[
		{
			breakpoint:768,
			settings:{
				infinite: true,
				arrows: false,
				centerMode: true,
				slidesToShow: 3,
			}
		},

		{
			breakpoint:580,
			settings:{
				infinite:true,
				slidesToShow: 2,
				arrows: false,
				centerMode: true,
			}
		},

		{
			breakpoint:360,
			settings:{
				infinite:true,
				arrows:false,
				centerMode:true,
				slidesToShow: 1,
			}
		}

		]
	});

	$('.tratamentos .container').slick({
		centerMode:false,
		slidesToShow:3,
		arrows:false,
		infinite:false,
		responsive:[
		{
			breakpoint:768,
			settings:{
			arrows:false,
			dots:true,
			infinite:false,
			centerMode:false,
			slidesToShow:1,
		}
		}
		]


	});

	$('.depoimentos .container').slick({
		centerMode:false,
		slidesToShow:1,
		arrows:false,
		infinite:false,
		dots:true,
	});
});