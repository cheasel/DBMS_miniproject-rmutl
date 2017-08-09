		setInterval(function(){
			$.ajax({
				url: 'https://rmutl-db2.us/mysqli.class.php',
				type: 'POST',
				dataType: 'json',
				data: {temp: true, humi: true},
			})
			.done(function(d) {
				$('p#display-temp').html(d.d_temp + " °C");
				$('p#display-humi').html(d.d_humi + " %");
			})
		}, 500);