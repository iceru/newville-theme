<?php
/**
 * The template for displaying content in the index.php template.
 */
?>


<div class="body p-0">
	<div class="header" id="top">
		<div class="background" id="bg">
			<img src="<?php bloginfo('template_directory');?>/images/bg-header.png" alt="Newville">
		</div>
		<div class="background2">
			<img src="<?php bloginfo('template_directory');?>/images/header-5.png" alt="Newville">
		</div>
		<div class="background2" id="sakura">
			<img src="<?php bloginfo('template_directory');?>/images/sakura.png" alt="Newville">
		</div>
		<div class="container-fluid p-0">
			<div class="top-header">
				<div class="cloth" id="cloth">
					<img src="<?php bloginfo('template_directory');?>/images/cloth.png" alt="Newville">
				</div>
				<div class="logo1" id="logo1">
					<img src="<?php bloginfo('template_directory');?>/images/header-2.png" alt="Newville">
				</div>
				<div class="logo2" id="logo2">
					<img src="<?php bloginfo('template_directory');?>/images/header-3.png" alt="Newville">
				</div>
				<div class="text">
					<h2 class="title">NEW LIFE OF THE NEXT GENERATION</h2>
					<h6 class="subtitle">次世代の新しい命 &nbsp; | &nbsp; 다음 세대의 새로운 삶 &nbsp; | &nbsp; 下一代的新生活</h6>
				</div>
			</div>
			<div class="images" id="images">
				<div class="go-down">
					<a href="#sub">
						<img class="img" src="<?php bloginfo('template_directory');?>/images/chevron-bottom.png"
							alt="Chevron Down">
					</a>

				</div>
				<div class="left-img" id="building1">
					<img class="img" src="<?php bloginfo('template_directory');?>/images/header-4.png" alt="Newville">
				</div>
				<div class="right-img" id="building2">
					<img class="img" src="<?php bloginfo('template_directory');?>/images/alpha.png" alt="Newville"></i>
				</div>
			</div>
		</div>

	</div>

	<script>
		let bg = document.getElementById("bg");
		let cloth = document.getElementById("cloth");
		let logo1 = document.getElementById("logo1");
		let logo2 = document.getElementById("logo2");
		let sakura = document.getElementById("sakura");

		window.addEventListener('scroll', function () {
			const value = window.scrollY;

			cloth.style.top = value * 0.4 + 'px';
			sakura.style.top = value * 0.2 + 'px';
			logo2.style.top = (60 + value * 0.05) + '%';
			logo1.style.top = (70 + value * 0.05) + '%';
		})
	</script>
	<div class="sub-header" id="sub">
		<div class="background">
			<img src="<?php bloginfo('template_directory');?>/images/bg-subheader.png" alt="Subheader">
		</div>
		<div class="background2">
			<img src="<?php bloginfo('template_directory');?>/images/bg-subheader-2.png" alt="Subheader">
		</div>
		<div class="side-background bottom left">
			<img src="<?php bloginfo('template_directory');?>/images/bg-sub-sideleft.png" alt="Subheader">
		</div>
		<div class="side-background bottom right">
			<img src="<?php bloginfo('template_directory');?>/images/bg-sub-sideright.png" alt="Subheader">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="subtitle">
						A PEACEFUL ENCLAVE FOR
					</div>
					<div class="title">
						LIVE, WORK, AND PLAY
					</div>
					<div class="text">
						Kami belajar dari tempat-tempat perkotaan di Eropa, Jepang, Korea, China, dan banyak lagi tempat
						tinggal perkotaan yang serupa untuk menciptakan gaya hidup perkotaan yang dinamis bagi generasi
						berikutnya untuk menjalani kehidupan yang lebih baik di Newville.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="locations" id="location">
		<div class="background">
			<img src="<?php bloginfo('template_directory');?>/images/bg-locations.png" alt="Location">
		</div>
		<div class="side-background bottom left">
			<img src="<?php bloginfo('template_directory');?>/images/bg-sub-sideleft.png" alt="Location">
		</div>
		<div class="side-background top right">
			<img src="<?php bloginfo('template_directory');?>/images/bg-location-sideright.png" alt="Location">
		</div>
		<div class="side-background bottom right cloth">
			<img src="<?php bloginfo('template_directory');?>/images/cloth-location.png" alt="Location">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-5 col-lg-4  mb-4 mb-lg-0">
					<div class="subtitle">LOCATED AT THE</div>
					<div class="title">
						NEW LIPPO
						CIKARANG
					</div>
					<div class="text">
						Berlokasi di jantung kota Lippo Cikarang, Newville hadir di tengah lingkungan ideal yang
						dikelilingi berbagai fasilitas hunian terbaik dan akses yang mudah untuk mobilitas sehari-hari.
					</div>
					<a href="https://www.google.com/maps/place/NEWVILLE/@-6.3322781,107.1534767,17z/data=!4m6!3m5!1s0x2e699bdbc89bd257:0x26cb44326a7e5e04!8m2!3d-6.3322781!4d107.1556654!15sChdORVdWSUxMRSBsaXBwbyBjaWthcmFuZ5IBEWFwYXJ0bWVudF9jb21wbGV44AEA?hl=id&shorturl=1"
						target="_blank" type="button" class="btn btn-outline-light">Get Directions</a>
				</div>

				<div class="col-12 col-md-7 offset-lg-1">
					<div class="map">
						<img class="w-100" src="<?php bloginfo('template_directory');?>/images/locations-map.png"
							alt="">
					</div>
					<div class="map-desc">
						<img class="w-100" src="<?php bloginfo('template_directory');?>/images/locations-desc.png"
							alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="surroundings" id="surroundings">
		<div class="view-img"
			style="background-image: url(' <?php bloginfo('template_directory');?>/images/surroundings.png')">
		</div>
	</div>
	<div class="features" id="hubs">
		<div class="background">
			<img src="<?php bloginfo('template_directory');?>/images/bg-features.png" alt="Features">
		</div>
		<div class="side-background top right">
			<img src="<?php bloginfo('template_directory');?>/images/bg-sideright.png" alt="Features">
		</div>
		<div class="side-background middle left">
			<img src="<?php bloginfo('template_directory');?>/images/bg-sideleft.png" alt="Features">
		</div>
		<div class="side-background bottom right">
			<img src="<?php bloginfo('template_directory');?>/images/bg-sideright.png" alt="Features">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="images">
						<div class="people">
							<img src="<?php bloginfo('template_directory');?>/images/entertainment-man.png"
								alt="Entertainment">
						</div>
						<div class="logo1" id="eLogo1">
							<img src="<?php bloginfo('template_directory');?>/images/entertainment-logo1.png"
								alt="Entertainment">
						</div>
						<div class="logo2" id="eLogo2">
							<img src="<?php bloginfo('template_directory');?>/images/entertainment-logo2.png"
								alt="Entertainment">
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="title">
						ENTERTAINMENT
					</div>
					<div class="subtitle">
						HUB
					</div>
					<div class="text">
						New Lippo Cikarang menyediakan fasilitas hiburan, kuliner, pusat perbelanjaan, dan ruang kreatif
						untuk memberikan keseimbangan hidup generasi berikutnya.
					</div>
				</div>
			</div>
			<div class="row right-side">
				<div class="col-12 col-md-6 mb-3 mb-lg-0 order-2 order-md-1">
					<div class="title">
						BUSINESS & COMMERCE
					</div>
					<div class="subtitle">
						HUB
					</div>
					<div class="text">
						Sebagai salah satu lokasi paling strategis di Koridor Timur Jakarta, New Lippo Cikarang
						menghadirkan pusat bisnis dan perdagangan untuk memajukan sektor usaha disekitarnya.
					</div>
				</div>
				<div class="col-12 col-md-6 order-1 order-md-2">
					<div class="images">
						<div class="people">
							<img src="<?php bloginfo('template_directory');?>/images/business-man.png" alt="business">
						</div>
						<div class="logo1" id="bLogo1">
							<img src="<?php bloginfo('template_directory');?>/images/business-logo1.png" alt="business">
						</div>
						<div class="logo2" id="bLogo2">
							<img src="<?php bloginfo('template_directory');?>/images/business-logo2.png" alt="business">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="images">
						<div class="people">
							<img src="<?php bloginfo('template_directory');?>/images/wellness-man.png" alt="wellness">
						</div>
						<div class="logo1" id="wLogo1">
							<img src="<?php bloginfo('template_directory');?>/images/entertainment-logo1.png"
								alt="wellness">
						</div>
						<div class="logo2" id="wLogo2">
							<img src="<?php bloginfo('template_directory');?>/images/entertainment-logo2.png"
								alt="Entertainment">
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="title">
						WELlNESS
					</div>
					<div class="subtitle">
						HUB
					</div>
					<div class="text">
						New Lippo Cikarang mengembangkan Wellness Hub untuk menciptakan kehidupan yang hijau, aktif,
						sehat, dan berkelanjutan.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="view">
		<div class="view-img" id="view"
			style="background-image: url(' <?php bloginfo('template_directory');?>/images/view.png')">
		</div>
	</div>
	<div class="units" id="units">
		<div class="superior unit">
			<div class="background">
				<img src="<?php bloginfo('template_directory');?>/images/bg-superior.png" alt="Superior">
			</div>
			<div class="side-background top left">
				<img src="<?php bloginfo('template_directory');?>/images/bg-sideleft.png" alt="Units">
			</div>
			<div class="side-background bottom right">
				<img src="<?php bloginfo('template_directory');?>/images/bg-sideright.png" alt="Units">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-5 col-lg-4">
						<div class="subtitle">
							Type
						</div>
						<div class="title">
							Superior
						</div>
						<button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
							data-bs-target="#superior">View More</button>
					</div>
					<div class="col-12 col-md-7 offset-lg-1">
						<div class="position-relative">
							<img class="w-100" id="superiorImg"
								src="<?php bloginfo('template_directory');?>/images/superior.png" alt="Superior">

							<div class="background">
								<img src="<?php bloginfo('template_directory');?>/images/logo-transparent-4.png"
									alt="Deluxe">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="superior" tabindex="-1" data-bs-keyboard="false" role="dialog"
			aria-labelledby="modalTitleId" aria-hidden="true">
			<div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button class="close btn" data-bs-dismiss="modal" aria-label="Close">
							x
						</button>
						<div class="row align-items-center">
							<div class="col-12 col-md-5 col-lg-4 ">
								<div class="subtitle">
									Type
								</div>
								<div class="title">
									Superior
								</div>
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="standard-superior" data-bs-toggle="tab"
											data-bs-target="#standard-superior-pane" type="button" role="tab"
											aria-controls="standard-superior-pane"
											aria-selected="true">Standard</button>
										<div class="size">
											24,35 m²
										</div>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="corner-superior" data-bs-toggle="tab"
											data-bs-target="#corner-superior-pane" type="button" role="tab"
											aria-controls="corner-superior-pane" aria-selected="false">Corner</button>
										<div class="size">
											26,81 m²
										</div>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="garden-superior" data-bs-toggle="tab"
											data-bs-target="#garden-superior-pane" type="button" role="tab"
											aria-controls="garden-superior-pane" aria-selected="false">Garden</button>
										<div class="size">
											29,73 m²
										</div>
									</li>
								</ul>
							</div>
							<div class="col-12 col-md-8 images">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="standard-superior-pane" role="tabpanel"
										aria-labelledby="standard-superior" tabindex="0">
										<img class="w-100"
											src="<?php bloginfo('template_directory');?>/images/superior_standard.png"
											alt="Superior Standard">
									</div>
									<div class="tab-pane fade" id="corner-superior-pane" role="tabpanel"
										aria-labelledby="corner-superior" tabindex="0">
										<img class="w-100"
											src="<?php bloginfo('template_directory');?>/images/superior_corner.png"
											alt="Superior Corner">
									</div>
									<div class="tab-pane fade" id="garden-superior-pane" role="tabpanel"
										aria-labelledby="garden-superior" tabindex="0">
										<img class="w-100"
											src="<?php bloginfo('template_directory');?>/images/superior_garden.png"
											alt="Superior Garden">
									</div>
								</div>
							</div>
						</div>
						<div class="gallery mt-4 mt-lg-0">
							<div class="image">
								<img class="w-100" src="<?php bloginfo('template_directory');?>/images/superior1.jpg"
									alt="Superior">
							</div>
							<div class="image">
								<img class="w-100" src="<?php bloginfo('template_directory');?>/images/superior2.jpg"
									alt="Superior">
							</div>
							<div class="image">
								<img class="w-100" src="<?php bloginfo('template_directory');?>/images/superior3.jpg"
									alt="Superior">
							</div>
							<div class="image">
								<img class="w-100" src="<?php bloginfo('template_directory');?>/images/superior4.jpg"
									alt="Superior">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="deluxe unit">
			<div class="background">
				<img src="<?php bloginfo('template_directory');?>/images/bg-deluxe.png" alt="Deluxe">
			</div>

			<div class="side-background bottom left">
				<img src="<?php bloginfo('template_directory');?>/images/bg-sideleft.png" alt="Units">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-7 offset-lg-1">
						<div class="position-relative">
							<img class="w-100" id="deluxeImg"
								src="<?php bloginfo('template_directory');?>/images/Deluxe.png" alt="Deluxe">
							<div class="background">
								<img src="<?php bloginfo('template_directory');?>/images/logo-transparent-4.png"
									alt="Deluxe">
							</div>
						</div>
					</div>
					<div class="col-md-1 d-none d-lg-block"></div>
					<div class="col-12 col-md-5 col-lg-4 ">
						<div class="subtitle">
							Type
						</div>
						<div class="title">
							Deluxe
						</div>
						<button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
							data-bs-target="#deluxe">View More</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="deluxe" tabindex="-2" role="dialog" aria-labelledby="modalDeluxe"
			aria-hidden="true">
			<div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body">

						<button class="close btn" data-bs-dismiss="modal" aria-label="Close">
							x
						</button>
						<div class="row align-items-center">
							<div class="col-12 col-md-5 col-lg-4 ">
								<div class="subtitle">
									Type
								</div>
								<div class="title">
									Deluxe
								</div>
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="standard-deluxe" data-bs-toggle="tab"
											data-bs-target="#standard-deluxe-pane" type="button" role="tab"
											aria-controls="standard-deluxe-pane" aria-selected="true">Standard</button>
										<div class="size">
											28,95 m²
										</div>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="corner-deluxe" data-bs-toggle="tab"
											data-bs-target="#corner-deluxe-pane" type="button" role="tab"
											aria-controls="corner-deluxe-pane" aria-selected="false">Corner</button>
										<div class="size">
											31,85 m²
										</div>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="garden-deluxe" data-bs-toggle="tab"
											data-bs-target="#garden-deluxe-pane" type="button" role="tab"
											aria-controls="garden-deluxe-pane" aria-selected="false">Garden</button>
										<div class="size">
											31,86 m²
										</div>
									</li>
								</ul>
							</div>
							<div class="col-12 col-md-7 offset-lg-1 images">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="standard-deluxe-pane" role="tabpanel"
										aria-labelledby="standard-deluxe" tabindex="0">
										<img class="w-100"
											src="<?php bloginfo('template_directory');?>/images/deluxe_standard.png"
											alt="Deluxe Standard">
									</div>
									<div class="tab-pane fade" id="corner-deluxe-pane" role="tabpanel"
										aria-labelledby="corner-deluxe" tabindex="0">
										<img class="w-100"
											src="<?php bloginfo('template_directory');?>/images/deluxe_corner.png"
											alt="Deluxe Corner">
									</div>
									<div class="tab-pane fade" id="garden-deluxe-pane" role="tabpanel"
										aria-labelledby="garden-deluxe" tabindex="0">
										<img class="w-100"
											src="<?php bloginfo('template_directory');?>/images/deluxe_garden.png"
											alt="Deluxe Garden">
									</div>
								</div>
							</div>
						</div>
						<div class="gallery mt-4 mt-lg-0">
							<div class="image">
								<img class="w-100" src="<?php bloginfo('template_directory');?>/images/deluxe1.jpg"
									alt="Deluxe">
							</div>
							<div class="image">
								<img class="w-100" src="<?php bloginfo('template_directory');?>/images/deluxe2.jpg"
									alt="Deluxe">
							</div>
							<div class="image">
								<img class="w-100" src="<?php bloginfo('template_directory');?>/images/deluxe3.jpg"
									alt="Deluxe">
							</div>
							<div class="image">
								<img class="w-100" src="<?php bloginfo('template_directory');?>/images/deluxe4.jpg"
									alt="Deluxe">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="suite unit">
			<div class="background">
				<img src="<?php bloginfo('template_directory');?>/images/bg-suite.png" alt="Suite">
			</div>
			<div class="side-background bottom left">
				<img src="<?php bloginfo('template_directory');?>/images/bg-sideleft.png" alt="Units">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-5 col-lg-4 ">
						<div class="subtitle">
							Type
						</div>
						<div class="title">
							Suite
						</div>
						<button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
							data-bs-target="#suite">View More</button>
					</div>
					<div class="col-12 col-md-7 offset-lg-1">
						<div class="position-relative">
							<img class="w-100" id="suiteImg"
								src="<?php bloginfo('template_directory');?>/images/Suite.png" alt="Suite">
							<div class="background">
								<img src="<?php bloginfo('template_directory');?>/images/logo-transparent-4.png"
									alt="Deluxe">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="suite" tabindex="-2" role="dialog" aria-labelledby="modalSuite"
				aria-hidden="true">
				<div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<button class="close btn" data-bs-dismiss="modal" aria-label="Close">
								x
							</button>
							<div class="row align-items-center">
								<div class="col-12 col-md-4">
									<div class="subtitle">
										Type
									</div>
									<div class="title">
										Suite
									</div>
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="standard-suite" data-bs-toggle="tab"
												data-bs-target="#standard-suite-pane" type="button" role="tab"
												aria-controls="standard-suite-pane"
												aria-selected="true">Standard</button>
											<div class="size">
												40,75 m²
											</div>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="corner-suite" data-bs-toggle="tab"
												data-bs-target="#corner-suite-pane" type="button" role="tab"
												aria-controls="corner-suite-pane" aria-selected="false">Corner</button>
											<div class="size">
												43,74 m²
											</div>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="garden-suite" data-bs-toggle="tab"
												data-bs-target="#garden-suite-pane" type="button" role="tab"
												aria-controls="garden-suite-pane" aria-selected="false">Garden</button>
											<div class="size">
												46,26 m²
											</div>
										</li>
									</ul>
								</div>
								<div class="col-12 col-md-8 images">
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="standard-suite-pane" role="tabpanel"
											aria-labelledby="standard-suite" tabindex="0">
											<img class="w-100"
												src="<?php bloginfo('template_directory');?>/images/suite_standard.png"
												alt="Suite Standard">
										</div>
										<div class="tab-pane fade" id="corner-suite-pane" role="tabpanel"
											aria-labelledby="corner-suite" tabindex="0">
											<img class="w-100"
												src="<?php bloginfo('template_directory');?>/images/suite_corner.png"
												alt="Suite Corner">
										</div>
										<div class="tab-pane fade" id="garden-suite-pane" role="tabpanel"
											aria-labelledby="garden-suite" tabindex="0">
											<img class="w-100"
												src="<?php bloginfo('template_directory');?>/images/suite_garden.png"
												alt="Suite Garden">
										</div>
									</div>
								</div>
							</div>
							<div class="gallery mt-4 mt-lg-0">
								<div class="image">
									<img class="w-100" src="<?php bloginfo('template_directory');?>/images/suite1.jpg"
										alt="Suite">
								</div>
								<div class="image">
									<img class="w-100" src="<?php bloginfo('template_directory');?>/images/suite2.jpg"
										alt="Suite">
								</div>
								<div class="image">
									<img class="w-100" src="<?php bloginfo('template_directory');?>/images/suite3.jpg"
										alt="Suite">
								</div>
								<div class="image">
									<img class="w-100" src="<?php bloginfo('template_directory');?>/images/suite4.jpg"
										alt="Suite">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tour" id="tour">
		<div class="background">
			<img src="<?php bloginfo('template_directory');?>/images/bg-tour.png" alt="Tour">
		</div>
		<div class="background2">
			<img src="<?php bloginfo('template_directory');?>/images/bg-tour-2.png" alt="Tour">
		</div>
		<div class="logo images">
			<img class="w-100" src="<?php bloginfo('template_directory');?>/images/logo-transparent-2.png"
				alt="Newville">
		</div>
		<div class="building images">
			<img src="<?php bloginfo('template_directory');?>/images/alpha.png" alt="Newville">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="subtitle">
						EXPLORE MORE IN OUR
					</div>
					<div class="title">
						360 TOUR
					</div>
					<a href="https://360framed.com/newville/" type="button" class="btn btn-outline-light">View</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contact">
		<div class="background">
			<img src="<?php bloginfo('template_directory');?>/images/bg-contact.png" alt="Contact Us">
		</div>
		<div class="logo">
			<img src="<?php bloginfo('template_directory');?>/images/logo-transparent-3.png" alt="Contact Us">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="subtitle">
						Begin Your
					</div>
					<div class="title">
						Global <br>
						Lifestyle
					</div>
				</div>
				<div class="col-12 col-md-6">
					<?php echo apply_shortcodes( '[contact-form-7 id="22" title="Contact Form"] ') ?>
				</div>
			</div>
		</div>
	</div>
	<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
		<div class="offcanvas-body">
			<button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
				<img src="<?php bloginfo('template_directory');?>/images/xmark.svg" alt="Close">
			</button>
			<div class="logo">
				<img src="<?php bloginfo('template_directory');?>/images/logo-hires.png" alt="Newville">
			</div>
			<?php
				// Loading WordPress Custom Menu (theme_location).
				wp_nav_menu(
					array(
						'menu' => 'menu_left',
						'container'      => '',
						'menu_class'     => 'menu',
						'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
						'walker'         => new WP_Bootstrap_Navwalker(),
					)
				);
			?>
			<?php
				// Loading WordPress Custom Menu (theme_location).
				wp_nav_menu(
					array(
						'menu' => 'menu_right',
						'container'      => '',
						'menu_class'     => 'menu',
						'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
						'walker'         => new WP_Bootstrap_Navwalker(),
					)
				);
			?>
		</div>
	</div>
	<script>
		let wLogo1 = document.getElementById("wLogo1");
		let wLogo2 = document.getElementById("wLogo2");
		let bLogo1 = document.getElementById("bLogo1");
		let bLogo2 = document.getElementById("bLogo2");
		let eLogo1 = document.getElementById("eLogo1");
		let eLogo2 = document.getElementById("eLogo2");

		let superior = document.getElementById('superiorImg');
		let deluxe = document.getElementById('deluxeImg');
		let suite = document.getElementById('suiteImg');

		window.addEventListener('scroll', function () {
			const value = window.pageYOffset;
			console.log(value);

			eLogo1.style.transform = `translate(-50%, ${-180 + (value * 0.04)}%)`
			eLogo2.style.transform = `translate(-50%, ${-110 + (value * 0.02)}%)`
			bLogo1.style.transform = `translate(-50%, ${-220 + (value * 0.04)}%)`
			bLogo2.style.transform = `translate(-50%, ${-140 + (value * 0.02)}%)`
			wLogo1.style.transform = `translate(-50%, ${-240 + (value * 0.04)}%)`
			wLogo2.style.transform = `translate(-50%, ${-150 + (value * 0.02)}%)`

			superior.style.transform = `translateY(${(value - 6300) * 0.08 + 'px'})`;
			deluxe.style.transform = `translateY(${(value - 7000) * 0.06 + 'px'})`;
			suite.style.transform = `translateY(${(value - 7700) * 0.08 + 'px'})`;

		})
	</script>
</div>