<table border="1">
	<tr>
		<td>
			{{ $tugas->nama_tugas }}
		</td>
	</tr>
	<tr>
		<td>
			<script>
				CountDownTimer('{{$tugas->created_at}}', 'countdown');
				function CountDownTimer(dt, id)
				{
					var end = new Date('{{$tugas->end_date}}');
					var _second = 1000;
					var _minute = _second * 60;
					var _hour = _minute * 60;
					var _day = _hour * 24;
					var timer;
					function showRemaining() {
						var now = new Date();
						var distance = end - now;
						if (distance < 0) {

							clearInterval(timer);
							document.getElementById(id).innerHTML = '<b>TUGAS SUDAH BERAKHIR</b> ';
							return;
						}
						var days = Math.floor(distance / _day);
						var hours = Math.floor((distance % _day) / _hour);
						var minutes = Math.floor((distance % _hour) / _minute);
						var seconds = Math.floor((distance % _minute) / _second);

						document.getElementById(id).innerHTML = days + 'days ';
						document.getElementById(id).innerHTML += hours + 'hrs ';
						document.getElementById(id).innerHTML += minutes + 'mins ';
						document.getElementById(id).innerHTML += seconds + 'secs';
						document.getElementById(id).innerHTML +='<h2>TUGAS BELUM BERAKHIR</h2>';
					}
					timer = setInterval(showRemaining, 1000);
				}
			</script>
			<div id="countdown"> 
			</td>
		</tr>
	</table>