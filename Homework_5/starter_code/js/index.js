$(document).ready(function(){

	function changeBackground() {
		
		event.preventDefault();

		var city = $('#city-type').val();
		$('#city-type').val('');
		city = city.toLowerCase().trim();

		if (city == 'new york' || city == 'new york city' || city == 'nyc') {
			$('body').attr('class','nyc');
		} else if (city == 'san francisco' || city == 'sf'|| city == 'bay area') {
			$('body').attr('class','sf');
		} else if (city == 'los angeles' || city == 'la' || city == 'lax') {
			$('body').attr('class','la');
		} else if (city == 'austin' || city == 'atx') {
			$('body').attr('class','austin');
		} else if (city == 'sydney' || city == 'syd') {
			$('body').attr('class','sydney');
		} else {
			$('body').attr('class','');
		}
	};

	$('#submit-btn').click(changeBackground);

});