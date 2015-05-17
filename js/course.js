$(document).ready(init);

function init() {
	$("#wrapper").fadeIn(3000);

	$.fn.scrollPath("getPath",{
    scrollSpeed: 20,
    rotationSpeed: Math.PI / 10 
})

		.moveTo(400, 50, {name: "p01"})

		.lineTo(400, 800, {name: "p02"})

		.arc(200, 1200, 400, -Math.PI/2, Math.PI/2, true)
		.lineTo(600, 1600, {

			name: "p03"
		})

		.lineTo(1750, 1600, {

			name: "p04"
		})

		.arc(1800, 1000, 600, Math.PI/2, 0, true, {rotate: Math.PI/2 })

		.lineTo(2400, 750, {
			name: "p05"
		})

		.rotate(3*Math.PI/2, {
			name: "p06"
		})

		.lineTo(2400, -700, {
			name: "p07"
		})

		.arc(2250, -700, 150, 0, -Math.PI/2, true)


		.lineTo(1350, -850, {
			name: "08"
		})
		.arc(1300, 50, 900, -Math.PI/2, -Math.PI, true, {rotate: Math.PI*2, name: "end"});


	$(".pathwrapper").scrollPath({drawPath: true, wrapAround: true});

}




