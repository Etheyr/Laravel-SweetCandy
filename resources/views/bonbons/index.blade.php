<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bonbon</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<div class="ui  top fixed menu">

		<div class="item">
			<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
		</div>


		<div class="item">
			<h1 class="header">Article</h1>
		</div>


		<form action="/" method="post" class="ui form">
			{{csrf_field()}}
			<div class="ui right aligned category search item">
				<div class="field">
					<label for="bonbon">Bonbon</label>
					<input type="text" name="bonbon" placeholder="Bonbon">
				</div>


				<div class="field">
					<label for="stock">Stock</label>
					<input type="text" name="decalage" placeholder="Decalage">
				</div>


				<div class="item">
					<button type="submit" class="ui green button">Ajouter</button>
				</div>
			</div>
		</form>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="ui two column centered grid">

		<div class="ui  cards">
			@foreach($bonbon as $value)

			<div class="card">

				<div class="image">
					<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
				</div>

				<div class="content">
					<div class="header">{{$value->name}}</div>
				</div>

				<div class="extra content">
					<span class="left floated">
						Stock :	{{$value->stock}}
					</span>
				</div>

			</div>

			@endforeach
		</div>

	</div>

</div>


<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>