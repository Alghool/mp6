<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>

	<!-- HEADER: MENU + HEROE SECTION -->
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Local scoring system</a>
		</div>
	</nav>

	<!-- CONTENT -->
<div class="content">
	<div class="container-fluid">

		{users}
		<div class="row text-center">
			<form action="/mp6/public/home/update" method="post">
				<div class="col-1">{name} <input type="submit"/></div>
				<div class="col-11">
					<table class="table">
						<tbody>
						<tr>
							<th scope="row">
								<input type="hidden" name="user_id" value="{user_id}">
								<input type="hidden" name="week" value="{week}">
							</th>
							<td colspan="3">sleep</td>
							<td colspan="2">teeth</td>
							<td colspan="5">pray</td>
							<td colspan="4">eat</td>
						</tr>
						<tr>
							<th scope="row"></th>
							<td>morning</td>
							<td>midday</td>
							<td>night</td>
							<td>morning</td>
							<td>night</td>
							<td>fajr</td>
							<td>dohr</td>
							<td>aser</td>
							<td>maghrb</td>
							<td>eshaa</td>
							<td>breakfast</td>
							<td>lunch</td>
							<td>dinner</td>
							<td>fruit</td>
						</tr>
						{score}
							<tr>
								<th scope="row">{day}<input type="hidden" name="day[{date}][day]" value="{day}" /><input type="hidden" name="day[{date}][id]" value="{score_id}" /></th>
								<td><input style="width: 55px" type="number" name="day[{date}][wakeup]" value="{wakeup}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][midday_sleep]" value="{midday_sleep}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][sleep]" value="{sleep}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][morning_teeth]" value="{morning_teeth}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][night_teeth]" value="{night_teeth}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][fajer]" value="{fajer}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][dohr]" value="{dohr}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][aser]" value="{aser}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][maghrb]" value="{maghrb}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][eshaa]" value="{eshaa}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][breakfast]" value="{breakfast}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][lunch]" value="{lunch}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][dinner]" value="{dinner}" /></td>
								<td><input style="width: 55px" type="number" name="day[{date}][fruit]" value="{fruit}" /></td>
							</tr>
						{/score}
						</tbody>
					</table>
				</div>
			</form>
		</div>
		{/users}


	</div>
	<div class="container-fluid">
		<div class="row">
			{bonuses}
				<div class="col-2">
					<table class="table">
						<thead>
						<tr>
							<th scope="col" colspan="2">{name} <small>{score}</small></th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">{user}</th>
							<td><span  class="btn btn-sm btn-success">+</span><span class="repeat">{repetition}</span><span class="btn btn-sm btn-danger">-</span></td>
						</tr>
						</tbody>
					</table>
				</div>
			{/bonuses}
		</div>
	</div>
</div>


	<footer>
<!--		<script>-->
<!--			$('.btn').onclick(function(){-->
<!--				let myValue = $this.closest('td').find('.repeat').text();-->
<!--				myValue++;-->
<!--				console.log(myValue);-->
<!--				$this.closest('td').find('.repeat').text(myValue);-->
<!--			})-->
<!--		</script>-->
	</footer>



</body>
</html>
