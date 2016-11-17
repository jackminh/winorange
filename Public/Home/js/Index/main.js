var waves = document.querySelectorAll('.waves');
function show() {
	for(var i=0; i<waves.length; i++) {
	var list = waves[i]
    dynamics.css(waves, {
		opacity: 0,
		translateX: 400
	})
	dynamics.animate(waves, {
		opacity: 1,
		translateX: 0
	}, {
		type: dynamics.easeInOut,
		duration: 1200,
		delay: 400 + i * 100
	})
 }	
}
show()