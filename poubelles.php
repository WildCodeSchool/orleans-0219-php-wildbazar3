<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--Font awesome CSS-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 

	<!--My CSS-->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style-poubelles.css">

	<title>Poubelles</title>
</head>


<body>

	
	<!-- Start of header.php -->

	<?php

	include 'header.php';

	?>
	<!-- End of header.php -->


	<!-- Start of grid of product cards -->
	<section class="container">

		<!-- Start of row -->
		<div class="row">

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 1-->
				<div class="card">
					<div class="prix">€79.95</div>
					<img src="img/poubelle1.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
					<div class="card-body">
						<h5 class="card-title">Poubelle inox 50 litres à pédale</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal1">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Poubelle inox 50 litres à pédale</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle1.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€79.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 60 cm<br>- Largeur: 35 cm<br>- Poids: 3 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 2-->
				<div class="card">
					<div class="prix">€59.95</div>
					<img src="img/poubelle2.png" class="card-img-top" alt="Hefty 7 Gallon Step On Trash Can">
					<div class="card-body">
						<h5 class="card-title">Hefty 7 Gallon Step On Trash Can</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal2">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Hefty 7 Gallon Step On Trash Can</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle2.png" alt="Hefty 7 Gallon Step On Trash Can">
											</div>
										</div>
										<div class="col">
											<div class="prix">€59.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 55 cm<br>- Largeur: 30 cm<br>- Poids: 2,5 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 3-->
				<div class="card">
					<div class="prix">€99.45</div>
					<img src="img/poubelle3.png" class="card-img-top" alt="Poubelle dual inox stainless steel">
					<div class="card-body">
						<h5 class="card-title">Poubelle dual inox stainless steel</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal3">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Poubelle dual inox stainless steel</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle3.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€99.45</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 80 cm<br>- Largeur: 65 cm<br>- Poids: 8 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 4-->
				<div class="card">
					<div class="prix">€49.95</div>
					<img src="img/poubelle4.png" alt="Poubelle rose 30 litres Automatic Sensor">
					<div class="card-body">
						<h5 class="card-title">Poubelle rose 30 litres Automatic Sensor</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal4">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Poubelle rose 30 litres Automatic Sensor</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="img/poubelle4.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€49.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 50 cm<br>- Largeur: 35 cm<br>- Poids: 4 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 5-->
				<div class="card">
					<div class="prix">€19.95</div>
					<img src="img/poubelle5.png" class="card-img-top" alt="Retro cuir Home / Office Bureau Trash Can Bin Poubelle Taxi">
					<div class="card-body">
						<h5 class="card-title">Retro cuir Home / Office Bureau Trash Can Bin</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal5">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Retro cuir Home / Office Bureau Trash Can Bin</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle5.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€19.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 40 cm<br>- Largeur: 25 cm<br>- Poids: 2 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 6-->
				<div class="card">
					<div class="prix">€19.95</div>
					<img src="img/poubelle6.png" class="card-img-top" alt="CORBEILLE Retro élégant Home">
					<div class="card-body">
						<h5 class="card-title">CORBEILLE Retro élégant Home</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal6">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">CORBEILLE Retro élégant Home</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle6.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€19.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 40 cm<br>- Largeur: 25 cm<br>- Poids: 2 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 7-->
				<div class="card">
					<div class="prix">€89.95</div>
					<img src="img/poubelle7.png" class="card-img-top" alt="Poubelle 60 litres extérieure">
					<div class="card-body">
						<h5 class="card-title">Poubelle 60 litres extérieure</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal7">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Poubelle 60 litres extérieure</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle7.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€89.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 90 cm<br>- Largeur: 55 cm<br>- Poids: 13 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 8-->
				<div class="card">
					<div class="prix">€39.95</div>
					<img src="img/poubelle8.png" class="card-img-top" alt="TOFTAN Trash can - white">
					<div class="card-body">
						<h5 class="card-title">TOFTAN Trash can - white</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal8">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">TOFTAN Trash can - white</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle8.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€39.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 60 cm<br>- Largeur: 35 cm<br>- Poids: 3 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 9-->
				<div class="card">
					<div class="prix">€45.95</div>
					<img src="img/poubelle9.png" class="card-img-top" alt="commercial rolling trash bins">
					<div class="card-body">
						<h5 class="card-title">commercial rolling trash bins</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal9">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">commercial rolling trash bins</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle9.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€45.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 80 cm<br>- Largeur: 45 cm<br>- Poids: 10 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 10-->
				<div class="card">
					<div class="prix">€179.95</div>
					<img src="img/poubelle10.png" class="card-img-top" alt="Poubelle 660 litres en plastique">
					<div class="card-body">
						<h5 class="card-title">Poubelle 660 litres en plastique</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal10">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Poubelle 660 litres en plastique</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle10.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€179.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 80 cm<br>- Largeur: 105 cm<br>- Poids: 30 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 11-->
				<div class="card">
					<div class="prix">€79.95</div>
					<img src="img/poubelle11.png" class="card-img-top" alt="Poubelle 80 litres en plastique">
					<div class="card-body">
						<h5 class="card-title">Poubelle 80 litres en plastique</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal11">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Poubelle 80 litres en plastique</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle11.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€79.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 60 cm<br>- Largeur: 35 cm<br>- Poids: 3 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3 col-sm-6">

				<!-- card # 12-->
				<div class="card">
					<div class="prix">€99.95</div>
					<img src="img/poubelle12.png" class="card-img-top" alt="Touchless 60 Litres Stainless Steel Automatic">
					<div class="card-body">
						<h5 class="card-title">Touchless 60 Litres Stainless Steel Automatic</h5>
						<p class="card-text">Lorem ipsum dolor sit amet.</p>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn_item" data-toggle="modal" data-target="#modal12">
							Show more
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Touchless 60 Litres Stainless Steel Automatic</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="row">
										<div class="col">	
											<div class="modal-body">
												<img src="img/poubelle12.png" class="card-img-top" alt="poubelle-inox-50-litres-a-pedale">
											</div>
										</div>
										<div class="col">
											<div class="prix">€99.95</div>
											<p class="card-text textmodal-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum obcaecati, hic facilis voluptatem harum sint pariatur, sapiente provident modi, omnis quas animi voluptatum tenetur repudiandae porro est non. Esse.</p>
										</div>
									</div>
									<div class="row">
										<div class="textmodal-cara">Caractéristiques:</div>
									</div>
									<div class="row">	
										<p class="textmodal-cara">- Hauteur: 80 cm<br>- Largeur: 35 cm<br>- Poids: 5 klgs</p>	
									</div>
									<div class="modal-footer">
										
										<button type="button" class="btn btn_item">Ajouter au panier</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!-- End of grid of product cards -->


<!--Start of footer-->

<?php

include 'footer.php';

?>

<!--End of footer-->


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>