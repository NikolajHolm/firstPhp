<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="css/styles.css">

	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="jquery/script.js"></script>
	<meta charset="UTF-8">
	<title>Php Opgave</title>

</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar-light px-0 sticky-top">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">Anime hjemmeside </a>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="nav navbar-nav navbar-right ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="#">Anime<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="destinationer.html">Manga</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="kontakt.html">Characters</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="kontakt.html">Community</a>
					</li>					
				</ul>
				<ul class="ml-5 nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link my-2 my-sm-0" href="registerUser.php">Opret bruger</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logIn.php">Log ind</a>
					</li>
				</ul>
			</div>
			
		</div>
	</nav>
	<div class="container white-background">
		
		<header >
			<img class="img-fluid rounded" src="img/header.png" alt="">
		</header>
		<main class="mt-4">
			<div class="row">

			<!-- Admin -->

		<!-- 		<form class="form-horizontal col-md-12" method="post" action="#">

					<div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Overskrift</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-header" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" id="username"  placeholder="Skriv din overskrift til artiklen her"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Billede</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" id="username"  placeholder="Skriv navn på billede plus fil-type"/>
							</div>
						</div>
					</div>


					<div class="form-group">
						<label for="exampleTextarea">Tekst</label>
						<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Skriv din tekst her"></textarea>
					</div>



					<div class="form-group ">
						<button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
					</div>
				</form> -->

			<!-- Content -->


				<article class="col-md-4  mb-5">
					<a href="#"><img class="img-fluid rounded" src="img/Amnesia.jpg" alt="Amnesia"></a>
					<h2 class="pt-2">Amnesia</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi sunt odit unde quidem deleniti, eius magni hic. Impedit vel omnis dolorum saepe hic quis autem atque nesciunt ex, soluta laborum?</p>
					<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>


				<article class="col-md-4  mb-5">
					<a href=""><img class="img-fluid rounded" src="img/Yuno_Gasai.jpg" alt="Mirai Nikki Main Character Yuno Gasai"></a>
					<h2 class="pt-2">Mirai Nikki</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magni veniam, consequuntur porro repellat perspiciatis vero. Ex ullam reiciendis assumenda impedit, vero esse corporis suscipit quas ipsa hic enim dignissimos.</p>
					<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>


				<article class="col-md-4  mb-5">
					<a href="#"><img class="img-fluid rounded" src="img/Gosic.jpg" alt="Gosic"></a>
					<h2 class="pt-2">Gosic</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magni veniam, consequuntur porro repellat perspiciatis vero. Ex ullam reiciendis assumenda impedit, vero esse corporis suscipit quas ipsa hic enim dignissimos.</p>
					<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>

				<article class="col-md-4  mb-5">
					<a href=""><img class="img-fluid rounded" src="img/higurashi_no_naku_koro_ni.jpg" alt="Higurashi No Naku Koro Ni"></a>
					<h2 class="pt-2">Higurashi No Naku Koro Ni</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magni veniam, consequuntur porro repellat perspiciatis vero. Ex ullam reiciendis assumenda impedit, vero esse corporis suscipit quas ipsa hic enim dignissimos.</p>
					<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>


				<article class="col-md-4  mb-5">
					<a href="#"><img class="img-fluid rounded" src="img/claymore.jpg" alt="Claymore"></a>
					<h2 class="pt-2">Claymore</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magni veniam, consequuntur porro repellat perspiciatis vero. Ex ullam reiciendis assumenda impedit, vero esse corporis suscipit quas ipsa hic enim dignissimos.</p>
					<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>	


				<article class="col-md-4  mb-5">
					<a href="#"><img class="img-fluid rounded" src="img/Chaos_Head.jpg" alt="Chaos head"></a>
					<h2 class="pt-2">Chäos;HEAd</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magni veniam, consequuntur porro repellat perspiciatis vero. Ex ullam reiciendis assumenda impedit, vero esse corporis suscipit quas ipsa hic enim dignissimos.</p>
					<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>


				<article class="col-md-4  mb-5">
					<a href="#"><img class="img-fluid rounded" src="img/D_Gray_Man.jpg" alt="D Gray Mam"></a>
					<h2 class="pt-2">D Gray Man</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magni veniam, consequuntur porro repellat perspiciatis vero. Ex ullam reiciendis assumenda impedit, vero esse corporis suscipit quas ipsa hic enim dignissimos.</p>
					<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>


				<article class="col-md-4  mb-5">
					<a href="#"><img class="img-fluid rounded" src="img/jigoku_shoujo.jpg" alt="Jigoku Shoujo"></a>
					<h2 class="pt-2">Jigoku Shoujo</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magni veniam, consequuntur porro repellat perspiciatis vero. Ex ullam reiciendis assumenda impedit, vero esse corporis suscipit quas ipsa hic enim dignissimos.</p>
					<button class="btn btn-primary mb-4" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>	


				<article class="col-md-4  mb-5">
					<a href="#"><img class="img-fluid rounded" src="img/mahou_shoujo_madoka_magica.jpg" alt=" mahou shoujo madoka magica"></a>
					<h2 class="pt-2">Mahou Shoujo Madoka Magica</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi magni veniam, consequuntur porro repellat perspiciatis vero.</p>
					
					<button class="btn btn-primary mb-4 readMore" type="submit">Læs om animeen</button>
					<br>
					<span class="jumbotron text-center">30-05-2017</span>
				</article>	
			</div>
		</main>
		<footer class="">
			<p class="text-center">Copyright &copy Nikolaj Holm Hansen</p>
		</footer>
	</div>
	
</body>
</html>