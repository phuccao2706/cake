<?php
	require_once("connection.php");

	$sql="select * from cake_info";
	$temp = $pdo->prepare($sql);
	$temp->execute();
	$data = $temp->fetchAll(PDO::FETCH_OBJ);
	$base_url="http://localhost/testing/";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"  crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>
<body>
	<div class="container-fluid bg-light d-md-flex d-none px-5 py-3">
	    <div class="my-auto">
	    	<i style="" class="fas fa-phone fa-2x ml-3"></i>
	    	<p class="d-inline ml-1">0909 759 447</p>
	    	<i class="fas fa-map-marked-alt fa-2x ml-3"></i>
	    	<p class="d-inline ml-1">Lorem ipsum dolor sit amet.</p>
	    </div>
	    <div class="my-auto ml-auto">
	    	<a href=""><i class="fas fa-facebook fa-2x brand"></i></a>
	    	<a href=""><i class="fas fa-google-plus-g fa-2x brand"></i></a>
	    	<a href=""><i class="fas fa-twitter fa-2x brand"></i></a>
	    	<a href=""><i class="fas fa-linkedin-in fa-2x brand"></i></a>
	    </div>
	</div>
	<nav class="navbar navbar-dark navbar-expand-sm d-block d-md-none bg-dark">
		  	<div class="container-fluid">
			    <button class="navbar-toggler" data-target="#collapsenav" aria-controls="collapsenav" aria-expanded="false" aria-label="Toggle navigation" data-toggle="collapse" type="button">
			      	<span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="collapsenav">
			      	<ul class="nav navbar-nav ml-auto mr-3 text-light ">
			     	 	<li class="nav-item my-auto">
			     	   		<a class="nav-link text-light h6 mb-0" href="#">HOME</a>
			     		 </li>
			     	 	<li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#">ABOUT US</a>
			     		 </li>
			     		 <li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#">CAKE</a>
			     		 </li>
			     		 <li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#">DESSERT</a>
			     		 </li>
			     		 <li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#">PROMOTION</a>
			     		 </li>
			     		 <li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#"><i class="fas fa-shopping-cart fa-2x"></i></a>
			     		 </li>
			    	</ul>
			    </div>   
		  	</div>
		</nav>
	<div id="banner-parent" class="">
		<nav class="navbar navbar-dark navbar-expand-sm d-none d-md-block" id="menu-bar">
		  	<div class="container-fluid">
			    <button class="navbar-toggler" data-target="#collapsenav" aria-controls="collapsenav" aria-expanded="false" aria-label="Toggle navigation" data-toggle="collapse" type="button">
			      	<span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="collapsenav">
			      	<ul class="nav navbar-nav ml-auto mr-3 text-light ">
			     	 	<li class="nav-item my-auto">
			     	   		<a class="nav-link text-light h6 mb-0" href="#">HOME</a>
			     		 </li>
			     	 	<li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#">ABOUT US</a>
			     		 </li>
			     		 <li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#">CAKE</a>
			     		 </li>
			     		 <li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#">DESSERT</a>
			     		 </li>
			     		 <li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#">PROMOTION</a>
			     		 </li>
			     		 <li class="nav-item my-auto">
			       		 	<a class="nav-link text-light h6 mb-0" href="#"><i class="fas fa-shopping-cart fa-2x"></i></a>
			     		 </li>
			    	</ul>
			    </div>   
		  	</div>
		</nav>

		<div class="container" id="banner">
			<div class="jumbotron jumbotron-fluid text-light">
	   	 		<h1 class="text-center border-bottom pb-2 mx-auto mb-0">The Art of French</h1>    
	   	 		<h1 class="text-center pt-2">PROFITEROLE</h1>  
	   	 		<h1 class="text-center">Patissenrie</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="feature">
			<h1 class="text-center">Feature</h1>
			<div id="slide-show" class="slide-show">
				<?php foreach($data as $d){?>
				<div class="sub-slide-show mx-2 position-relative">
					<img class="w-100" src="img/<?php echo $d->image?>" >
					<div class="name-slide-show position-absolute w-100 text-uppercase fixed-bottom">
						<div class="d-inline-block pl-3 py-1" id="slide-name">
							<p class="text-warning m-0"><?php echo $d->name?></p>
							<p class="m-0">$ <?php echo $d->price?></p>
						</div>
						<div class="slide-cart pr-3 d-inline-block float-right"><a href="#"><span class="fas fa-shopping-cart fa-2x "></span></a></div>
					</div>
				</div>
			<?php } ?>

			</div>
			<div></div>
		</div>
		<br>
	</div>
	<div class="container-fluid px-0">
		<div id="story">
			<div id="inner-story">
				<h1 class="text-center text-warning">Our Story</h1>
				<p class="text-light text-center">Donec sit amet volutpat turpis, ut congue augue. Integer pulvinar turpis id fermentum iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut lobortis consequat erat non gravida. Nullam ante velit, malesuada et facilisis ac, porttitor eget tortor. Nulla facilisi. Etiam eu nibh in sapien molestie interdum ac non ligula. Curabitur venenatis quis metus iaculis ullamcorper. Ut lacinia vel libero at scelerisque. Sed tristique dignissim velit, eu feugiat sem efficitur et.</p>
				<p class="text-light text-center">Nulla bibendum, tellus eget hendrerit elementum, enim tellus faucibus turpis, sit amet posuere felis diam egestas orci. Sed commodo arcu sit amet cursus egestas. Consectetur adipiscing elit. Maecenas tempor, ante ac ultrices congue, leo tellus vehicula mauris, ac aliquam arcu dui eget erat. Vivamus sagittis aliquam imperdiet. Integer auctor purus lectus, in fringilla nibh fringilla et.</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div id="service">
			<h1 class="text-center text-warning">Service</h1>
			<div class="row">
				<div class="col-12 col-md-4 position-relative my-3">
					<img class="position-relative" src="img/cart.jpg">
					<div class="position-absolute service-title">
						<a href="#"><h4 class="mb-0 text-light">Table Serving</h4></a>
					</div>
				</div>
				<div class="col-12 col-md-4 position-relative my-3">
					<img class="position-relative" src="img/cart.jpg">
					<div class="position-absolute service-title">
						<a href="#"><h4 class="mb-0 text-light">Table Serving</h4></a>
					</div>
				</div>
				<div class="col-12 col-md-4 position-relative my-3">
					<img class="position-relative" src="img/cart.jpg">
					<div class="position-absolute service-title">
						<a href="#"><h4 class="mb-0 text-light">Table Serving</h4></a>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<br>

	<div class="container-fluid">
		<div id="footer">
			<div class="row">
				<div class="col-md-7 col-12 bg-light px-0">
					<div class="my-md-5 my-3 ml-5">
				    	<a href=""><i class="fas fa-facebook fa-3x brand"></i></a>
				    	<a href=""><i class="fas fa-google-plus-g fa-3x brand"></i></a>
				    	<a href=""><i class="fas fa-twitter fa-3x brand"></i></a>
				    	<a href=""><i class="fas fa-linkedin-in fa-3x brand"></i></a>
	    			</div>
	    			<div class="ml-5 mt-md-5 mt-3 mb-3 position-relative">
				    	<i class="fas fa-map-marked-alt fa-3x"></i>
				    	<p class="d-inline ml-3 mt-3 pr-1 pr-md-0 position-absolute">Lorem ipsum dolor sit amet dolor sit ame dolor si.</p>
				    </div>
	    			<div class="ml-5 mb-3 position-relative">
				    	<i style="" class="fas fa-phone fa-3x"></i>
				    	<p class="d-inline ml-3 mt-3 pr-1 pr-md-0 position-absolute">0909 759 447</p>
				    </div>
				    <div class="ml-5 mb-md-0 mb-3 position-relative">
				    	<i class="far fa-envelope fa-3x"></i>
				    	<p class="d-inline ml-3 mt-3 pr-1 pr-md-0 position-absolute">Lorem ipsum dolor sit amet.</p>
				    </div>
				</div>

				<div class="col-md-5 col-12 px-0">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4002459485146!2d106.69620561533434!3d10.780625862062854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f37cade9cef%3A0x89a11cd90293c6cc!2sDiamond+Plaza!5e0!3m2!1svi!2s!4v1540638268724" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="slick/slick.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#slide-show').slick({
			  	slidesToShow: 5,
			  	slidesToScroll: 1,
			  	autoplay: false,
			  	autoplaySpeed: 1000,
			  	// variableWidth: true,
			  	responsive: [
			    {
			      	breakpoint: 1024,
			      	settings: {
				        slidesToShow: 1,
					  	slidesToScroll: 1,
					  	autoplay: false,
					  	// variableWidth: true,
					  	autoplaySpeed: 1000
			    	}
			    }
			    ],
			});
		})
	</script>
</body>
</html>